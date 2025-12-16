<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_produto',
        'imagem_produto',
        'promocao',
        'em_estoque',
        'descricao',
        'valor',
        'status',
        'ultima_atualizacao',
        'motivo_atualizacao',
        'responsavel_atualizacao',
    ];

    protected $casts = [
        'promocao' => 'boolean',
        'em_estoque' => 'boolean',
        'status' => 'boolean',
    ];

    public $timestamps = false;

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }
}
