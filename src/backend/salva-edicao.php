<?php

    require_once('conn.php');

    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header("Location: ../../home");
        die();
    }

    if(!isset($_POST['nome']) || !isset($_POST['senha']) || !isset($_POST['senha-repetida']) || !isset($_GET['id'])){
        header("Location: ../../home");
        die();
    }

    $nome = $_POST['nome'];
    $senha = sha1($_POST['senha']);
    $id = $_GET['id'];
    $senhaRepetida = sha1($_POST['senha-repetida']);

    if($senhaRepetida != $senha){
        $_SESSION['senha'] = true;
        header("Location: ../../edita-home?id=".$id);
        die();
    }

    $sql = "UPDATE alunos SET nome = ?, senha = ? WHERE id = ?;";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$nome, $senha, $id]);

    header("Location: ../../home");
    die();

?>