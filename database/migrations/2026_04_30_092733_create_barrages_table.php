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
        Schema::create('barrages', function (Blueprint $table) {
            $table->id("BarrageId");
            $table->string("Nom");
            $table->string("Riviere");
            $table->date("DateConstruction");
            $table->float("Longeur");
            $table->float("Largeur");
            $table->float("Hauteur");
            $table->float("Laltitude");
            $table->float("Longitude");
            $table->integer("CapaciteMaximale");
            $table->float("VolumeActuel");
            $table->float("VolumeMinimal");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barrages');
    }
};
