<?php

namespace App\Http\Controllers;

use App\Burguer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreUpdateBurguerRequest;
use Redirect;
use Illuminate\Support\Facades\Session;
use DB;

class BurguerController extends Controller
{

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $burguers = Burguer::orderBy('nome')->paginate(15);

        return view('burguer.list', ['burguers' => $burguers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('burguer.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateBurguerRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateBurguerRequest $request)
    {
        $b = new Burguer();
        $b->nome = $request->input('nome');
        $b->desc = $request->input('desc');
        $b->preco = $request->input('preco');
        if($request->hasfile('imagem')){
            $file = $request->file('imagem');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/burguers', $filename);
            $b->imagem = $filename;
        }
        $b->save();
        Session::flash('mensagem_sucesso', 'Burguer cadastrado com sucesso!');
        return redirect()->route('burguer.index');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $burguer = Burguer::where('id', $id)->first();
        if (!$burguer) {
            return redirect()->back();
        }
        return view('burguer.add', ['burguer' => $burguer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateBurguerRequest $request, $id)
    {
        $burguer = Burguer::where('id', $id)->first();
        if (!$burguer) {
            return redirect()->route('burguer.index');
        }
        $burguer->nome = $request->input('nome');
        $burguer->desc = $request->input('desc');
        $burguer->preco = $request->input('preco');
        if($request->hasfile('imagem')){
            $file = $request->file('imagem');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/burguers', $filename);
            $burguer->imagem = $filename;
        }
        $burguer->save();
        Session::flash('mensagem_sucesso', 'Burguer editado com sucesso!');
        return redirect()->route('burguer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $burguer = Burguer::where('id', $id)->first();
        if (!$burguer) {
            return redirect()->back();
        }
        $burguer->delete();
        Session::flash('mensagem_sucesso', 'Burguer excluído com sucesso!');
        return redirect()->route('burguer.index');
    }
}
