<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string("nomService");
            $table->string("contenue");
            $table->string("image");
            $table->unsignedBigInteger("cout");
            $table->string("dateCreation");
            $table->integer("status");

            $table->unsignedBigInteger("idTypeService")->nullable();
            $table->unsignedBigInteger("idUtilisateur")->nullable();

            $table->foreign("idTypeService")->references("id")->on("type_services");
            $table->foreign("idUtilisateur")->references("id")->on("utilisateurs");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
