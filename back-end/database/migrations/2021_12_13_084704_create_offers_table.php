<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("linguaggio")->nullable();
            $table->string("icona")->nullable();
            $table->string("azienda")->nullable();
            $table->float("ral")->nullable();
            $table->string("esperienza")->nullable();
            $table->string("location")->nullable();
            $table->string("descrizione")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
