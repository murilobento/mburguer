<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProdutoRequest;
use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    protected $request;
    private $repository;

    public function __construct(Request $request, Produto $produto)
    {
        $this->request = $request;
        $this->repository = $produto;

        $this->middleware('auth');
    }

    public function index()
    {
        $produtos = Produto::where('status', 1)->orderBy('tipo')->paginate(5);
        return view('produto.list', ['produtos' => $produtos]);
    }

    public function inactive()
    {
        $produtos = Produto::where('status', 0)->orderBy('nome')->paginate(15);
        return view('produto.list', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produto.add');
    }

    public function store(StoreUpdateProdutoRequest $request)
    {

        $data = $request->all();
        if ($request->hasFile('imagem') && $request->imagem->isValid()) {
            $path = $request->imagem->store('produtos');
            $data['imagem'] = $path;
        }
        Produto::create($data);
        Session::flash('mensagem_sucesso', 'Produto cadastrado com sucesso!');
        return redirect()->route('produto.index');
    }

    public function edit($id)
    {
        $produto = Produto::where('id', $id)->first();
        if (!$produto) {
            return redirect()->back();
        }
        return view('produto.add', ['produto' => $produto]);
    }
    
    public function update(StoreUpdateProdutoRequest $request, $id)
    {
        $status = Produto::where('id', $id)->first();
        if($status->status === 1){
            if (!$produto = $this->repository->find($id)) {
                return redirect()->back();
            }
            $data = $request->all();
    
            if ($request->hasFile('imagem') && $request->imagem->isValid()) {
                if ($produto->imagem && Storage::exists($produto->imagem)) {
                    Storage::delete($produto->imagem);
                }
                $path = $request->imagem->store('produto');
                $data['imagem'] = $path;
            }
            $produto->update($data);
            Session::flash('mensagem_sucesso', 'Produto editado com sucesso!');
            return redirect()->route('produto.index');

        }        
        else {
            Session::flash('mensagem_alerta', 'Somente produtos ativos podem ser editados!');
            return redirect()->route('produto.index');
        }
    }
    
    public function destroy($id)
    {
        $produto = $this->repository->where('id', $id)->first();
        if (!$produto) {
            return redirect()->back();
        }
        if ($produto->imagem && Storage::exists($produto->imagem)) {
            Storage::delete($produto->imagem);
        }
        $produto->delete();
        Session::flash('mensagem_sucesso', 'Produto excluído com sucesso!');
        return redirect()->route('produto.index');
    }
}
