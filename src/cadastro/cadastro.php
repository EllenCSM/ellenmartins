<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/login/login.css">
    <link rel="stylesheet" href="./src/style.css">
</head>
<body>
    <main>
        <form action="src/backend/cadastrar-usuario.php" method="POST" id="container-login">
            <div class="box-input">
                <label for="">Digite seu nome</label>
                <input required name="nome" type="text" placeholder="Fulano">
            </div>
            <div class="box-input">
                <label for="">Digite sua senha</label>
                <input required name="senha" type="password" placeholder="MinhaSenha@123.">
            </div>

            <div class="box-input">
                <label for="">Repita sua senha</label>
                <input required name="senha-repetida" type="password" placeholder="MinhaSenha@123.">
            </div>

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
                <small><a href="login">Fazer Login</a></small>
            </div>
            <?php
                if(isset($_SESSION['senha'])){
                    echo '<small style="color: red;">Senhas Diferentes</small>';
                }
                if(isset($_SESSION['nomeExistente'])){
                    echo '<small style="color: red;">Nome Já Existe</small>';
                }
                session_destroy();
            ?>
            <button>Cadastrar</button>
        </form>
    </main>
</body>
</html>