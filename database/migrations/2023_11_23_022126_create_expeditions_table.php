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
        Schema::create('expeditions', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignulid('id_societe')->references('id')->on('societes')->cascadeOnDelete();
            $table->string('adresse_de_depart');
            $table->string('adresse_de_livraison');
            $table->string('type_de_marchandise');
            $table->string('date_de_depart');
            $table->string('date_de_livraison');
            $table->integer('prix');
            $table->string('numero_de_serie');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expeditions');
    }
};
