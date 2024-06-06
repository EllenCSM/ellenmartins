<?php
    require_once('./conn.php');

    if(!isset($_GET['id'])){
        header("Location: ../../home");
        die();
    }

    $id = $_GET['id'];

    $sql = "DELETE FROM alunos where id = ?;";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    header("Location: ../../home");
    die();
?>