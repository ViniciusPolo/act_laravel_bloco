<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [ //cria as colunas da tabela, criada la no artisan
        'title',
        'content',
        'user_id'
    ];
}
