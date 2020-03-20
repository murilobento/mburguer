<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Burguer;

class Carrinho extends Model
{
    protected $table = 'carrinho';

    public static function produtos(){       
        return Produto::where('status', 1)->orderBy('tipo')->get();
    }

}
