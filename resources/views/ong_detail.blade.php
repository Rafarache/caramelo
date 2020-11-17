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
            <?php include 'css/ong_detail.css'; ?>
            <?php include 'css/pet_card.css'; ?>
        </style>
    </head>
    <body>
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
        <div class="main_container" style="display:block">
            <div class="ong_container">
                @foreach($ongs as $ong)
                    <?php 
                        if(!empty($ong->image)) {
                            echo '<img class="pet_card_image" src="data:image/jpeg;base64,'.base64_encode( $ong->image ).'"/>'; 
                        }
                        else {
                            echo '<img class="pet_card_image" src="no_image.jpg"/>'; 
                    }?>
                    <div style="margin-left: 20px;font-size: 2.5rem">
                        Nome: {{$ong->nome}} <br>
                        Endereço: {{$ong->endereço}} <br>
                        Telefone: {{$ong->telefone}} <br>
                        E-mail: {{$ong->email}} <br>
                    </div>
                @endforeach
            </div>
            <div class="pet-cards-container">
                @foreach($pets as $pet)
                <a href="/pets/{{$pet->id}}" class="pet_card" >
                    <?php 
                    if(!empty($pet->image)) {
                        echo '<img class="pet_card_image" src="data:image/jpeg;base64,'.base64_encode( $pet->image ).'"/>'; 
                    }
                    else {
                        echo '<img class="pet_card_image" src="no_image.jpg"/>'; 
                    }?>
                    <div class="pet_card_description">
                        <div class="pet_card_text keep_size">
                            Nome: {{$pet->nome}} <br>
                            Espécie: {{$pet->espécie}} <br>
                            ONG: {{$pet->ong}}<br>
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
        </div>
    </body>
</html>
