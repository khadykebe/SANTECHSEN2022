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
            $table->string("dateService");
            $table->unsignedBigInteger("idService")->nullable();
            $table->unsignedBigInteger("idClient")->nullable();

            $table->foreign("idService")->references("id")->on("services")->onDelete('set null');
            $table->foreign("idClient")->references("id")->on("clients")->onDelete('set null');

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
