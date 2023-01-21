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
        Schema::create('choix_option_motorisation', function (Blueprint $table) {
            $table->foreignId('motorisation_id')->constrained();
            $table->foreignId('choix_option_id')->constrained();
            $table->decimal('cout', $precision = 6 , $scale = 0);

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
        Schema::dropIfExists('choix_option_motorisation');
    }
};
