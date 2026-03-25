<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->string('email_client');
            $table->string('reference_produit');
            $table->date('date_commande');
            $table->integer('quantite');
            $table->timestamps();

            $table->primary(['email_client', 'reference_produit', 'date_commande']);

            $table->foreign('email_client')->references('email')->on('clients');
            $table->foreign('reference_produit')->references('reference')->on('produits');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
