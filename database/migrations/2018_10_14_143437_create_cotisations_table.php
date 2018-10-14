<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotisations', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('identifiant');
            $table->integer('montant');
            $table->string('reference');
            $table->string('source');            
            $table->string('messageSource');

            $table->integer('campagne_id')->unsigned()->index();
            $table->foreign('campagne_id')->references(('id'))->on('campagnes')->onDelete('cascade');
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
        Schema::dropIfExists('cotisations');
    }
}
