<?php
    session_start();
    $request = $_SERVER['REQUEST_URI'];
    $request = str_replace('/ellenmartins/', '', $request);
    $request = parse_url($request, PHP_URL_PATH);
    $routes = [
        '' => 'src/login/login.php',
        'login' => 'src/login/login.php',
        'cria-conta' => 'src/cadastro/cadastro.php',
        'home' => 'src/home.php',
        'edita-home' => 'src/edita-home/edita-home.php',
        'novo-cadastro' => 'src/cadastro/novo-cadastro.php'
    ];

    if (array_key_exists($request, $routes)) {
        include $routes[$request];
        die();
    } else {
        echo 'Erro 404: Página não encontrada';
        die();
    }
?>