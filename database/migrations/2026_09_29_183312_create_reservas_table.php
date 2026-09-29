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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('laboratorio_id')
                ->constrained('laboratorios')
                ->cascadeOnDelete();

            $table->string('responsavel');
            $table->date('data');
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->text('finalidade')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};