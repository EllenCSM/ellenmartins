<?php
    require_once('conn.php');

    $sql = "SELECT * FROM alunos;";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>