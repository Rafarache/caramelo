<!DOCTYPE html>
<?php
use App\Http\Controllers\ONGController;
use App\Models\Ong_log;
?>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
		<title>Caramelo | Site de Adoção e Lar Temporário</title>
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
			@if(Auth::check())
				<a class="nav_button button" href="{{ url('/') }}">Bem-Vindo {{ Auth::user()->name }}</a>
			@endif
            <a class="nav_button button" href="{{ url('/pesquisa') }}">PESQUISA</a>
            <a class="nav_button button" href="{{ url('/cadastro') }}">CADASTRO</a>
			<a class="nav_button button" href="{{url('/login')}}">LOGIN</a>
			<a class="nav_button button" href="{{url('/ong_login')}}" style="background-color: #4b2b04">ONGS</a>
            <a class="nav_button button" href="{{ url('/sobre') }}">SOBRE</a>
			
        </div>
		<div class="main_container">
				<h1>Login ONGS</h1>
				@if (session('message'))
				<div class= "alert alert-danger alert-block":
					<button type="button" class="close" data-dismiss="alert">x</button>
					<strong>{{ session('message') }}</strong></div>
				@endif
								
				@if (session()->has('ONG'))
					<meta http-equiv="refresh" content="0; url='/ongs_mng'" />
				@endif
					
				<form class="" action="{{URL::to('/logar_ong')}}" method="post">
					<hr>Email</hr>&emsp;<input type="email" name="email" value="">
					<hr>Senha</hr>&emsp;<input type="password" name="senha" value="">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<br><br><button type="submit" name"button">Logar</button>
				</form><br>
				<a href='/ong_register'>Cadastrar ONG</a>
				</div>
		</div>
		
    </body>
</html>
