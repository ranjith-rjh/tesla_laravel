<?php

use App\Models\Vehicule;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('secondPrenom')->nullable();
            $table->string('nomentreprise')->nullable();
            $table->string('numerotva')->nullable();
            $table->string('password')->nullable();
            //fk
            $table->foreignId('type_compte_id')->constrained();
            $table->foreignId('adresse_id')->nullable()->constrained();
            //phone
            $table->string('telephone')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->integer('mobile_verify_code')->nullable();
            //Google OAuth
            $table->string('google_id')->nullable();
            $table->timestamp('derniereConnexion')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }

    
};
