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
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->unsignedBigInteger('num_dossier');
            $table->string('matricule');
            $table->date('date_rdv');
            $table->time('heure_rdv');
            $table->timestamps();

            $table->primary(['num_dossier', 'matricule', 'date_rdv']);

            $table->foreign('num_dossier')->references('num_dossier')->on('patients');
            $table->foreign('matricule')->references('matricule')->on('medecins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vous');
    }
};
