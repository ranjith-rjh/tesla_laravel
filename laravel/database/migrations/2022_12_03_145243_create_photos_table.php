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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('modele_id')->nullable()->constrained();
            $table->foreignId('motorisation_id')->nullable()->constrained();
            $table->foreignId('choix_option_id')->nullable()->constrained();
            $table->foreignId('style_id')->nullable()->constrained();
            // $table->foreignId('vehicule_id')->constrained();
            $table->string('lien_photo');
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
        Schema::dropIfExists('photos');
    }
};
