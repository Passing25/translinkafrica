<?php

use App\Enums\SecteurActivites;
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
        Schema::create('societes', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('nom');
            $table->enum('secteur_activites', array_map(fn($case)=>$case->value,SecteurActivites::cases()));
            $table->string('email')->nullable()->unique();
            $table->string('siege')->nullable();
            $table->string('logo')->nullable();
            $table->string('pays')->nullable();
            $table->integer('contact')->nullable();
            $table->string('matricule')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('societes');
    }
};
