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
            $table->string('descricao');
            $table->boolean('status')->default(1);
            $table->string('imagem_produto');
            $table->float('valor', 8, 2);
            $table->timestamp('data_criacao')->useCurrent();
            $table->timestamp('ultima_atualizacao')->nullable();
            $table->string('responsavel_atualizacao');
            $table->string('motivo_atualizacao');
        });


        Schema::create('categoria_produto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('produto_id')->constrained('produtos');
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
