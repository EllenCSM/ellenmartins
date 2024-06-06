<?php
    require_once('valida-login.php');
    require_once('backend/busca-usuarios.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" href="src/styles.css">
    <link rel="stylesheet" href="src/home.css">
</head>
<body>
    <h1>Listagem de Usuários - Ellen Martins</h1>
    <h1><a style="color: red;" href="login">Sair</a></h1>
    <h1><a style="color: orange;" href="novo-cadastro">Novo Aluno</a></h1>
    <ul class="user-list">
        <?php
            foreach ($resultados as $usuario){
        ?> 
            <li>
                <strong>Nome:</strong> <?php echo $usuario['nome']; ?><br>
                <strong>Matrícula:</strong> <?php echo $usuario['matricula']; ?><br>
                <strong>Curso:</strong> <?php echo $usuario['curso']; ?>
                <div class="actions">
                    <button class="edit-btn"><a href="edita-home?id=<?php echo $usuario['id']; ?>">Editar</a></button>
                    <button class="delete-btn"><a href="src/backend/deleta-home.php?id=<?php echo $usuario['id']; ?>">Deletar</a></button>
                </div>
            </li>
        <?php
            }
        ?>
    </ul>
</body>
</html>

