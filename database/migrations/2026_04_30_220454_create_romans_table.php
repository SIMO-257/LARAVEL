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
        Schema::create('romans', function (Blueprint $table) {
            $table->id();
            $table->string("Titre",80);
            $table->foreign("auteur")->references("idaut")->on("auteurs");
            $table->string("adresse",100);
            $table->decimal("prix",10,2)->nullable()->default(0);
            $table->integer("annee");
            $table->file("couverture")->nullable();
            $table->timestamps();
            $table->foreign("numd")->references("num")->on("editeurs");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('romans');
    }
};
