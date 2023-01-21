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
        Schema::create('motorisations', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('modele_id')->constrained();
            $table->foreignId('classe_energetique_id')->constrained();
            $table->string('libelle');
            $table->decimal('acceleration', $precision = 3 , $scale = 1);
            $table->integer('vitesse_max');
            $table->integer('autonomie');
            $table->string('motopropulseur',100);
            $table->decimal('prix', $precision = 8 , $scale = 2);

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
        Schema::dropIfExists('motorisations');
    }
};
