<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Burguer extends Model
{
    protected $table = 'burguers';

    protected $fillable = ['nome', 'desc', 'preco', 'imagem', 'status'];
}