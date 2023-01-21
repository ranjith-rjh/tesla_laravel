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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('modele_id')->nullable()->constrained();
            $table->foreignId('motorisation_id')->nullable()->constrained();
            // $table->string('libelle');
            $table->decimal('prix', $precision = 8 , $scale = 2);
            // $table->foreignId('user_id')->constrained();
            //$table->primary(['id','modele_id','motorisation_id']);
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
        Schema::dropIfExists('vehicules');
    }
};
