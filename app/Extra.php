<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $table = 'extras';

    protected $fillable = ['nome', 'desc', 'tipo', 'preco', 'imagem', 'status'];
}
