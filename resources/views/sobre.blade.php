<!DOCTYPE html>
<?php
use App\Http\Controllers\UserController;
?>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
		<title>Caramelo | Site de Ado��o e Lar Tempor�rio</title>
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
			<a class="nav_button button" href="{{url('/ong_login')}}">ONGS</a>
            <a class="nav_button button" href="{{ url('/sobre') }}" style="background-color: #4b2b04">SOBRE</a>
        </div>
		<div class="main_container">
			<h1>SOBRE</h1>
			
			Site desenvolvido para a disciplina INF01127- Engenharia de Software N - Turma B - 2020/1 - UFRGS <br>
			Profa. Dra. Lucin&eacute;ia Heloisa Thom
			
			<br><br>
			<h2>Integrantes</h2>
			
			Andrei Procaska Luchese Monteiro <br>
			Rafael Marques Rache <br>
			Jo&atilde;o Fernando Almeida Caemerer <br>
			Bruna Casagranda Cagliari <br>
			Andrews Lima Rodrigues <br>
			
		</div>		
    </body>
</html>
