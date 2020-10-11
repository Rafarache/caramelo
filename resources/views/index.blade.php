<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <style>
            <?php include 'css/navbar.css'; ?>
            <?php include 'css/index.css'; ?>
        </style>
    </head>
    <body>
        <div class="logo_site">
            Site de adoção e lar temporário
            <h1>Caramelo</h1>
        </div>
        <div class="nav_container">
            <a class="nav_button red" href="pesquisa">PESQUISA</a>
            <a class="nav_button blue" href="cadastro">CADASTRO</a>
            <a class="nav_button red" href="sobre">SOBRE</a>
        </div>        
    </body>
</html>
