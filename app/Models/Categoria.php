<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome_categoria', 'status', 'ultima_atualizacao', 'motivo_atualizacao', 'responsavel_atualizacao'];
    public $timestamps = false;

    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }
}
