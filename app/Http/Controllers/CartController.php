<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    function __construct()
    {
        // obriga estar logado;
        $this->middleware('auth');
    }

    public function index()
    {

        $products = Product::where('status', 1)->get();
        return view('cart.index', ['products' => $products]);
    }

    
}
