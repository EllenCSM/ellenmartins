<?php
    require_once('./conn.php');

    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header("Location: ../login");
        die();
    }

    if(!isset($_POST['nome']) && !isset($_POST['senha'])){
        header("Location: ../../login");
        die();
    }

    $nome = $_POST['nome'];
    $senha = sha1($_POST['senha']);

    $sql = "SELECT * FROM alunos WHERE nome = ? AND senha = ?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$nome,$senha]);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(count($resultados) === 0){
        $_SESSION['erro'] = true;
        header("Location: ../../login");
        die();
    }

    $_SESSION['logado'] = true;
    header("Location: ../../home");
    die();

?>