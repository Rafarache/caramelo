<!DOCTYPE html>
<?php
use App\Http\Controllers\UserController;
?>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
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
            <a class="nav_button button" href="{{ url('/pesquisa') }}">PESQUISA</a>
            <a class="nav_button button" href="{{ url('/cadastro') }}">CADASTRO</a>
            <a class="nav_button button" href="{{ url('/sobre') }}" style="background-color: #4b2b04">SOBRE</a>
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
                    ONG: # <br>
                    Temperamento: {{$pet->temperamento}} <br>
                    Porte: {{$pet->porte}} <br>
                </div>
            @endforeach
		</div>		
    </body>
</html>
