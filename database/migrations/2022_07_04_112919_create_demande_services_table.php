<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_services', function (Blueprint $table) {
            $table->id();
            $table->date("dateService");
            $table->unsignedBigInteger("idService")->nullable();
            $table->unsignedBigInteger("idClient")->nullable();

            $table->foreign("idService")->references("id")->on("services");
            $table->foreign("idClient")->references("id")->on("clients");
            
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
        Schema::dropIfExists('demande_services');
    }
}
