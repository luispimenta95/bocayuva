<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reforma extends Model
{
    protected $fillable = ['descricao', 'data_reforma', 'status', 'propietario', 'imagem', 'ultima_atualizacao', 'motivo_atualizacao', 'responsavel_atualizacao'];
    public $timestamps = false;
}
