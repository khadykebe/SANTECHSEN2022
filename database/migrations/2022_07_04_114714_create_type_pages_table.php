<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_pages', function (Blueprint $table) {
            $table->id();
            $table->string("nomType");
            $table->string("dateCreation");
            $table->integer("status");

            $table->unsignedBigInteger("idUtilisateur")->nullable();

            $table->foreign("idUtilisateur")->references("id")->on("utilisateurs");

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
        Schema::dropIfExists('type_pages');
    }
}
