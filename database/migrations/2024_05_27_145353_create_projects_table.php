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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('departamento');
            $table->string('ciclo')->nullable()->default(null);
            $table->string('autor')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->text('resumen')->nullable()->default(null);
            $table->string('curso')->nullable()->default(null);
            $table->string('clave1')->nullable()->default(null);
            $table->string('clave2')->nullable()->default(null);
            $table->string('clave3')->nullable()->default(null);
            $table->string('tema')->nullable()->default(null);
            $table->string('enlace')->nullable()->default(null)->unique();
            $table->text('comentarios')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
