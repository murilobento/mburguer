<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $request;
    private $repository;

    public function __construct(Request $request, Product $product)
    {
        $this->request = $request;
        $this->repository = $product;

        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::where('status', 1)->orderBy('type')->paginate(5);
        return view('product.list', ['products' => $products]);
    }

    public function inactive()
    {
        $products = Product::where('status', 0)->orderBy('name')->paginate(15);
        return view('product.list', ['products' => $products]);
    }

    public function create()
    {
        return view('product.add');
    }

    public function store(StoreUpdateProductRequest $request)
    {

        $data = $request->all();
        if ($request->hasFile('image') && $request->image->isValid()) {
            $path = $request->image->store('products');
            $data['image'] = $path;
        }
        Product::create($data);
        Session::flash('mensagem_sucesso', 'Produto cadastrado com sucesso!');
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        if (!$product) {
            return redirect()->back();
        }
        return view('product.add', ['product' => $product]);
    }
    
    public function update(StoreUpdateProductRequest $request, $id)
    {
        $status = Product::where('id', $id)->first();
        if($status->status === 1){
            if (!$product = $this->repository->find($id)) {
                return redirect()->back();
            }
            $data = $request->all();
    
            if ($request->hasFile('image') && $request->image->isValid()) {
                if ($product->image && Storage::exists($product->image)) {
                    Storage::delete($product->image);
                }
                $path = $request->image->store('products');
                $data['image'] = $path;
            }
            $product->update($data);
            Session::flash('mensagem_sucesso', 'Produto editado com sucesso!');
            return redirect()->route('product.index');

        }        
        else {
            Session::flash('mensagem_alerta', 'Somente produtos ativos podem ser editados!');
            return redirect()->route('product.index');
        }
    }
    
    public function destroy($id)
    {
        $product = $this->repository->where('id', $id)->first();
        if (!$product) {
            return redirect()->back();
        }
        if ($product->image && Storage::exists($product->image)) {
            Storage::delete($product->image);
        }
        $product->delete();
        Session::flash('mensagem_sucesso', 'Produto excluído com sucesso!');
        return redirect()->route('product.index');
    }
}
