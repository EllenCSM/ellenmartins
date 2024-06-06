<?php
    require_once('src/valida-login.php');
    require_once('src/backend/busca-usuario.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="src/styles.css">
    <link rel="stylesheet" href="src/edita-home/edita-home.css">
</head>
<body>
    <h1>Editar Usuário - Ellen Martins</h1>
    <h1><a href="home">Voltar</a></h1>
    <form action="src/backend/salva-edicao.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <label for="nome">Novo Nome:</label><br>
        <input required type="text" id="nome" name="nome" value="<?php echo $resultados[0]['nome']; ?>"><br><br>
        <label for="senha">Nova Senha:</label><br>
        <input required type="password" id="senha" name="senha"><br><br>
        <label for="senha-repetida">Repita Nova Senha:</label>
        <?php
            if(isset($_SESSION['senha'])){
                echo '<small style="color: red;">Senhas precisam ser iguais</small>';
            }
            unset($_SESSION['senha']);
        ?><br>
        <input required type="password" id="senha-repetida" name="senha-repetida"><br><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
