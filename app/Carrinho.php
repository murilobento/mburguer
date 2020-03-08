<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Burguer;

class Carrinho extends Model
{
    protected $table = 'carrinho';

    protected $fillable = ['nome', 'desc', 'preco', 'imagem', 'status'];

    public static function burguers(){
    	return Burguer::where('status', 1)->orderBy('nome')->get();
    }
    public static function extras(){
    	return Extra::all();
    }
}
