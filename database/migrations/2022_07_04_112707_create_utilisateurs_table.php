<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("email")->unique();
            $table->string("password");
            $table->string("telephone")->unique();
            $table->string("adresse");
            $table->string("photo")->unique();
            $table->integer("status");
            $table->unsignedBigInteger("idProfil")->nullable();

            $table->foreign("idProfil")->references("id")->on("profils");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
