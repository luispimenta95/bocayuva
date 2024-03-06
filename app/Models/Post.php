<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['link', 'imagem', 'status', 'ultima_atualizacao', 'motivo_atualizacao', 'responsavel_atualizacao'];
    public $timestamps = false;
}
