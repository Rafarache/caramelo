<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->enum('espécie', ['Cachorro', 'Gato']);
            $table->string('raça');
            $table->string('temperamento');
            $table->enum('porte', ['Grande', 'Medio','Pequeno']);
            $table->enum('status', ['Lar Temporario', 'Adotado','Aguardando']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
