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
        <form action="src/backend/login.php" method="POST" id="container-login">
            <div class="box-input">
                <label for="">Digite seu nome</label>
                <input required name="nome" type="text" placeholder="Fulano">
            </div>
            <div class="box-input">
                <label for="">Digite sua senha</label>
                <input required name="senha" type="password" placeholder="MinhaSenha@123.">
            </div>
            <div class="links">
                <small><a href="cria-conta">Criar conta</a></small>
            </div>
            <?php
                if(isset($_SESSION['erro'])){
                    echo '<small style="color: red;">Usuario ou senha invalidos</small>';
                }
                session_destroy();
            ?>
            <button>Entrar</button>
        </form>
    </main>
</body>
</html>