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
        Schema::create('panier_style_accessoire', function (Blueprint $table) {
            $table->id();

            $table->integer('quantite');
            
            // FK
            $table->foreignId('panier_id')->constrained();
            $table->foreignId('style_id')->constrained();
            $table->foreignId('accessoire_id')->constrained();

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
        Schema::dropIfExists('panier_style_accessoire');
    }
};
