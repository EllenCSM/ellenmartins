<?php
    require_once('src/valida-login.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="src/styles.css">
    <link rel="stylesheet" href="src/cadastro/novo-cadastro.css">
</head>
<body>
    <h1>Cadastrar Usuário - Ellen Martins</h1>
    <h1><a href="home">Voltar</a></h1>
    <form action="src/backend/cadastrar-usuario.php?path=home" method="POST">
        <label for="nome">Novo Nome:</label><br>
        <input required type="text" id="nome" name="nome"><br><br>
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
        <div class="box-input">
                <label style="text-align: left;">Selecione seu curso</a>
                <br>
                <select name="curso">
                    <option value="ADS">ADS</option>
                    <option value="Ciencias Sociais">Ciencias Sociais</option>
                    <option value="Medicina">Medicina</option>
                    <option value="Engenharia Civil">Engenharia Civil</option>
                </select>
            </div>
        <div class="links">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
