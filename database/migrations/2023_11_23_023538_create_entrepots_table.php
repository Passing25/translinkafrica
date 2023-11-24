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
        Schema::create('entrepots', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignulid('id_societe')->references('id')->on('societes')->cascadeOnDelete();
            $table->foreignulid('id_type_entrepot')->references('id')->on('type_entrepots')->cascadeOnDelete();
            $table->string('localisation');
            $table->string('capacite_de_stockage');
            $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrepots');
    }
};
