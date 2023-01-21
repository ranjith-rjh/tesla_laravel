<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('essais', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateRes');
            //fk
            $table->foreignId('user_id');
            $table->foreignId('modele_id');
            $table->foreignId('motorisation_id');
            $table->foreignId('vehicule_id');
            
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
        Schema::dropIfExists('essais');
    }
};
