<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartenairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partenairs', function (Blueprint $table) {
            $table->id();
            $table->string("nomPartenaire");
            $table->string("emailPartenaire")->unique();
            $table->string("telephone")->unique();
            $table->string("logo");

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
        Schema::dropIfExists('partenairs');
    }
}
