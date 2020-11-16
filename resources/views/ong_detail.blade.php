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
            <?php include 'css/ong_detail.css'; ?>
            <?php include 'css/pet_card.css'; ?>
        </style>
    </head>
    <body>
        <div class="nav_container">
            <a class="nav_button button" href="{{ url('/pesquisa') }}">PESQUISA</a>
            <a class="nav_button button" href="{{ url('/cadastro') }}">CADASTRO</a>
			<a class="nav_button button" href="{{url('/login')}}">LOGIN</a>
			<a class="nav_button button" href="{{url('/ong_login')}}">ONGS</a>
            <a class="nav_button button" href="{{ url('/sobre') }}">SOBRE</a>
        </div>
        <div class="main_container" style="display:block">
            <div class="ong_container">
                @foreach($ongs as $ong)
                @if(!empty($pet->image))
                    <img class="pet_card_image" src="../uploads/{{$ong->image}}">
                @endif
                @if(empty($pet->image))
                    <img class="pet_card_image" src="../no_image.jpg"/> 
                @endif
                <div style="margin-left: 20px;font-size: 2.5rem">
                    Nome: {{$ong->name}} <br>
                    Endereço: {{$ong->address}} <br>
                    Telefone: {{$ong->phone}} <br>
                    E-mail: {{$ong->email}} <br>
                </div>
                @endforeach
            </div>
            <div class="pet-cards-container">
                @foreach($pets as $pet)
                <a href="/pets/{{$pet->id}}" class="pet_card" >
                    @if(!empty($pet->image))
                        <img class="pet_card_image" src="../uploads/{{$pet->image}}">
                    @endif
                    @if(empty($pet->image))
                        <img class="pet_card_image" src="../no_image.jpg"/> 
                    @endif
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
