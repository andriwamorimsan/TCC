<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagens extends Model
{
    use HasFactory;

    protected $fillable = [
        'IMAGEM_URL',
        'IMAGEM_BINARIA ',
        'BLOB',
    ];
}
