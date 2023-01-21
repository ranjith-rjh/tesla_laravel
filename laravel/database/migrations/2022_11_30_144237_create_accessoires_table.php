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
        Schema::create('accessoires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_accessoire_id')->nullable()->constrained();
            $table->foreignId('code_promo_id')->nullable()->constrained();
            $table->string('libelle');
            $table->string('description', 1000);
            $table->decimal('prix', $precision = 6 , $scale = 2);
            $table->boolean('meilleure_vente');
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
        Schema::dropIfExists('accessoires');
    }
};
