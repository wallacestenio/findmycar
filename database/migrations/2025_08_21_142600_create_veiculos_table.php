<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id(); // chave primária
            $table->string('placa')->nullable();
            $table->string('renavam')->nullable();
            $table->string('chassi')->nullable();
            $table->string('motor')->nullable();
            $table->string('marca_modelo')->nullable();
            $table->string('ano_fabricacao')->nullable();
            $table->string('ano_modelo')->nullable();
            $table->string('categoria')->nullable();
            $table->string('cor')->nullable();
            $table->string('especie')->nullable();
            $table->string('capacidade')->nullable();
            $table->string('potencia')->nullable();
            $table->string('uf')->nullable();
            $table->string('municipio')->nullable();
            $table->date('data_emplacamento')->nullable();
            $table->string('status')->nullable();
            $table->string('combustivel')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
