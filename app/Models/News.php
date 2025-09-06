<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'subtitulo',
        'texto',
        'imagem',
        'autor'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    //pegar ultimo
    public function scopeUltimo($query) {
        return $query->orderBy('created_at', 'desc');
    }

    public function getDataFormatada() {
        return $this->created_at->format('d/m/Y H:i');
    }
}
