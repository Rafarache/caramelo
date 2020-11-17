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
        </style>
    </head>
    <body>
        <div class="logo_site">
			<center><a href="{{ url('/') }}">
			<img src="../logo_caramelo.png" alt="Site Caramelo" width="700"></a></center>
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
        <div class="main_container" style="display:flex">
            @foreach($pets as $pet)
                @if(!empty($pet->image))
                    <img class="pet_card_image" src="../uploads/{{$pet->image}}">
                @endif
                @if(empty($pet->image))
                    <img class="pet_card_image" src="no_image.jpg"/> 
                @endif
                <div style="margin-left: 20px;font-size: 2.5rem">
                    Nome: {{$pet->nome}} <br>
                    Espécie: {{$pet->espécie}} <br>
                    ONG: {{$pet->ong}} <br>
                    Temperamento: {{$pet->temperamento}} <br>
                    Porte: {{$pet->porte}} <br>
					Status: {{$pet->status}} <br>
                </div>
				@if($pet->status != 'Adotado' && $user_auth)
					<form class="" action="{{URL::to('/registra_adocao')}}" method="post">
						@csrf
						<input type="hidden" name="id_pessoa" value= "{{$user_id}}">
						<input type="hidden" name="id_pets" value= "{{$pet->id}}">
						<input type="hidden" name="status" value= "{{$pet->status}}">
						&emsp;<button type="submit" name"button">ADOTAR</button>
					</form>
				@endif
            @endforeach
		</div>		
    </body>
</html>
