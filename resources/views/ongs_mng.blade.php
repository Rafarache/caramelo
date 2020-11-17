<!DOCTYPE html>
<?php
use App\Http\Controllers\ONGController;

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
		@if (!session()->has('ONG'))
			<meta http-equiv="refresh" content="0; url='/ong_login'" />
		@endif
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
		<a href='/ong_logout'>log out</a>
			<h1>Gerenciamento {{session('ONG')->name }}</h1>
        <div class="">
            @if(!empty($pet->image))
                <img class="pet_card_image" src="../uploads/{{$ong->image}}">
            @endif
            @if(empty($pet->image))
                <img class="pet_card_image" src="../no_image.jpg"/> 
            @endif
            <h1>Cadastre um Pet</h1>
            <form action="/ongs_mng" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <br/>
                <label for="espécie">Espécie:</label>
                <select name="espécie" id="espécie" required>
                    <option value="Cachorro">Cachorro</option>
                    <option value="Gato">Gato</option>
                </select>
                <br/>
                <label for="raça">Raça:</label>
                <input type="text" name="raça" id="raça" required>
                <br/>
                <label for="temperamento">Temperamento:</label>
                <input type="text" name="temperamento" id="temperamento" required>
                <br/>
                <label for="base">Choose crust:</label>
                <select name="porte" id="porte" required>
                    <option value="Grande">Grande</option>
                    <option value="Medio">Medio</option>
                    <option value="Pequeno">Pequeno</option>
                </select>
                <br/>
                <label for="image">Imagem</label>
                <input id="image" type="file" name="image" accept="image/*" required>
                <input type="submit" value="Cadastrar">
            </form>
		</div>
        </div>
    </body>
</html>