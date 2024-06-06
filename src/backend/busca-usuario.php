<?php
    require_once('conn.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM alunos where id = ?;";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>