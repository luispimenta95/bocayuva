<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //adicionar campo descrição
    protected $fillable = ['nome_produto', 'descricao', 'valor', 'imagem_produto', 'status', 'promocao', 'ultima_atualizacao', 'motivo_atualizacao', 'responsavel_atualizacao'];
    public $timestamps = false;

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }
}
