<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    public static function products(){       
        return Product::where('status', 1)->orderBy('type')->get();
    }

}
