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
        Schema::create('propositions', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignulid('id_societe')->references('id')->on('societes')->cascadeOnDelete();
            $table->foreignulid('id_expedition')->references('id')->on('expeditions')->cascadeOnDelete();
            $table->integer('prix');
            $table->string('message');
            $table->string('statut');
            $table->string('type_de_proposition');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propositions');
    }
};
