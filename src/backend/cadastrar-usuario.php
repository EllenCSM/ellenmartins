<?php

    require_once('./conn.php');

    if(!isset($_POST['senha']) || !isset($_POST['nome']) || !isset($_POST['curso']) || !isset($_POST['senha-repetida'])){
        header("Location: ../../login");
        die();
    }

    $senha = sha1($_POST['senha']);
    $nome = $_POST['nome'];
    $curso = $_POST['curso'];
    $senhaRepetida = sha1($_POST['senha-repetida']);

    if($senha !== $senhaRepetida){
        $_SESSION['senha'] = true;
        if(isset($_GET['path'])){
            header("Location: ../../novo-cadastro");
            die();
        }
        header("Location: ../../cria-conta");
        die();
    }

    $sql = "SELECT * FROM alunos WHERE nome = ?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$nome]);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(count($resultados) > 0){
        $_SESSION['nomeExistente'] = true;
        header("Location: ../../cria-conta");
        die();
    }

    $numero_aleatorio = '';
    for ($i = 0; $i < 6; $i++) {
        $numero_aleatorio .= rand(0, 9);
    }

    $sql = "INSERT INTO alunos (senha, nome, matricula, curso, criado_em) VALUES (?,?,?,?,?)";

    $stmt = $conn->prepare($sql);
    $date = new DateTime();
    $stmt->execute([$senha, $nome, $numero_aleatorio, $curso, $date->format('Y-m-d H:i:s')]);

    header("Location: ../../home");
    die();

?>