<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image_path', 'link_url', 'is_active', 'order'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Escopo para banners ativos
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Escopo para ordenação
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }
}
