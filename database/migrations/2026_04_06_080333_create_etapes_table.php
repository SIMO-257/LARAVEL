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
        Schema::create('etapes', function (Blueprint $table) {
            $table->id("idetapes");
            $table->text("description");
            $table->date("date_realisation");
            $table->date("date_realisation");
            $table->foreign("id_projet")->references("projets")->on("idP");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etapes');
    }
};
