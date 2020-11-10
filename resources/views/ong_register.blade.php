<!DOCTYPE html>
<?php
use App\Http\Controllers\ONGController;
?>

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
			<center><a href="{{ url('/') }}">
			<img src="logo_caramelo.png" alt="Site Caramelo" width="700"></a></center>
        </div>
        <div class="nav_container">
            <a class="nav_button button" href="{{ url('/pesquisa') }}">PESQUISA</a>
            <a class="nav_button button" href="{{ url('/cadastro') }}">CADASTRO</a>
			<a class="nav_button button" href="{{url('/login')}}">LOGIN</a>
			<a class="nav_button button" href="{{url('/ong_login')}}">ONGS</a>
            <a class="nav_button button" href="{{ url('/sobre') }}">SOBRE</a>
			
        </div>
		<div class="main_container">
			<h1>CADASTRO ONGS</h1>
			<form class="" action="{{URL::to('/registro_ong')}}" method="post">
				<hr>Nome</hr>&emsp;<input type="text" name="name" value="" placeholder="Enter your name">
				<br>
				<hr>Email</hr>&emsp;<input type="email" name="email" class=form-control placeholder="Enter your email">
				<br>
				<hr>Telefone</hr>&emsp;<input type="text" name="fone" value="" placeholder="Enter your phone">
				<br>
				<hr>Endereço</hr>&emsp;<input type="text" name="endr" value="" placeholder="Enter your address">
				<br>
				<hr>Senha</hr>&emsp;<input type="password" name="senha" class="form-control" placeholder="Enter your password">
				<br>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				&emsp;<button type="submit" name"button">Register</button>
			</form>
		</div>
		
    </body>
</html>
