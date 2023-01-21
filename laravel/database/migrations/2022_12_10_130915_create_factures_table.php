<?php

use App\Models\User;
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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->decimal('cout');
            $table->decimal('montant_accompte')->nullable();
            //FK
            $table->foreignId('user_id')->nullable()->constrained(); //done
            $table->foreignId('adresse_id')->nullable()->constrained();//done
            $table->foreignId('vehicule_id')->nullable()->constrained();//done
            $table->foreignId('panier_id')->nullable()->constrained();//done
            $table->foreignId('etat_commande_id')->nullable()->constrained(); //done
            $table->foreignId('mode_paiement_id')->nullable()->constrained(); //done

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
        Schema::dropIfExists('factures');
    }

    
};
