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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto')->unique();
            $table->boolean('status')->default(1);
            $table->string('img_produto');
            $table->timestamp('data_criacao')->useCurrent();
            $table->timestamp('ultima_atualizacao')->nullable();
            $table->string('responsavel_atualizacao');
            $table->string('motivo_atualizacao');
        });


        Schema::create('categoria_produto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_categoria')->constrained('categorias');
            $table->foreignId('id_produto')->constrained('produtos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('categoria_produto');
        Schema::dropIfExists('produtos');
    }
};
