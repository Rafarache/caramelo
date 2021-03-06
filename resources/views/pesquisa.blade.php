<!DOCTYPE html>
<?php
use App\Http\Controllers\UserController;
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
            <?php include 'css/pet_card.css'; ?>
            <?php include 'css/filter.css'; ?>
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
            <a class="nav_button button" href="{{ url('/pesquisa') }}" style="background-color: #4b2b04">PESQUISA</a>
            <a class="nav_button button" href="{{ url('/cadastro') }}">CADASTRO</a>
			<a class="nav_button button" href="{{url('/login')}}">LOGIN</a>
			<a class="nav_button button" href="{{url('/ong_login')}}">ONGS</a>
            <a class="nav_button button" href="{{ url('/sobre') }}">SOBRE</a>
        </div>
        <div class="main_container" style="	display: flex;flex-wrap: wrap;">
			<div class="filter">
                <div class="collumn">
                    Espécie: 
                    <a class="filter_button" href="{{ route('pesquisa', ['espécie' => 'Cachorro', 'porte' => request('porte')])}}">Cachorro</a>
                    <a class="filter_button" href="{{ route('pesquisa', ['espécie' => 'Gato', 'porte' => request('porte')])}}">Gato</a>
                </div>
                <div class="collumn">
                    Porte: 
                    <a class="filter_button" href="{{ route('pesquisa', ['espécie' => request('espécie'), 'porte' => 'Pequeno'])}}">Pequeno</a>
                    <a class="filter_button" href="{{ route('pesquisa', ['espécie' => request('espécie'), 'porte' => 'Medio'])}}">Médio</a>
                    <a class="filter_button" href="{{ route('pesquisa', ['espécie' => request('espécie'), 'porte' => 'Grande'])}}">Grande</a>
                </div>
                <a class="filter_button todos" href="pesquisa">Todos</a>
            </div>
            @foreach($pets as $pet)
            <a href="/pets/{{$pet->id}}" class="pet_card" >
                @if(!empty($pet->image))
                    <img class="pet_card_image" src="uploads/{{$pet->image}}">
                @endif
                @if(empty($pet->image))
                    <img class="pet_card_image" src="no_image.jpg"/> 
                @endif
                <div class="pet_card_description">
                    <div class="pet_card_text keep_size">
                        Nome: {{$pet->nome}} <br>
                        Espécie: {{$pet->espécie}} <br>
                        ONG: {{$pet->ong}} <br>
                        Temperamento: {{$pet->temperamento}} <br>
                        Porte: {{$pet->porte}} <br>
                    </div>
                    <div class="box_status keep_size">
                        Status:
                        @if ($pet->status === 'Lar Temporario')
                            <div class="status">Lar temporário</div>
                        @endif
                        @if ($pet->status === 'Aguardando')
                            <div class="status">Aguardando</div>
                        @endif
                        @if ($pet->status === 'Adotado')
                            <div class="status">Adotado</div>
                        @endif
                    </div>
                </div>
            </a>
            @endforeach
		</div>
    </body>
</html>
