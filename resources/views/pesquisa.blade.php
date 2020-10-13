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
			<img src="logo_caramelo.png" alt="Site Caramelo" width="700"></a></center>
        </div>
        <div class="nav_container">
            <a class="nav_button button" href="{{ url('/pesquisa') }}" style="background-color: #4b2b04">PESQUISA</a>
            <a class="nav_button button" href="{{ url('/cadastro') }}">CADASTRO</a>
            <a class="nav_button button" href="{{ url('/sobre') }}">SOBRE</a>
        </div>
		<div class="main_container">
            <div class="pet_card">
            <div class="pet_card_image"></div>
            <div class="pet_card_description">
                <div class="pet_card_text keep_size">
                    Nome: Lucia <br>
                    Espécie: Cachorro <br>
                    ONG: Patinhas <br>
                    Temperamento: Calma <br>
                    Porte: Médio <br>
                </div>
                <div class="box_status keep_size">
                    Status:
                    <div class="status">Lar temporário</div>
                    <div class="status">Adoção</div>
                </div>
            </div>
        </div>
		</div>
    </body>
</html>
