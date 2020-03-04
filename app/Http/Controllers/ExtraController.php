<?php

namespace App\Http\Controllers;

use App\Extra;
use App\Http\Requests\StoreUpdateExtraRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExtraController extends Controller
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
        $extras = Extra::orderBy('tipo')->paginate(15);

        return view('extra.list', ['extras' => $extras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('extra.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request\StoreUpdateExtraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateExtraRequest $request)
    {

        $e = new Extra();
        $e->nome = $request->input('nome');
        $e->desc = $request->input('desc');
        $e->tipo = $request->input('tipo');
        $e->preco = $request->input('preco');
        if($request->hasfile('imagem')){
            $file = $request->file('imagem');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/extras', $filename);
            $e->imagem = $filename;
        }
        $e->save();
        Session::flash('mensagem_sucesso', 'Extra cadastrado com sucesso!');
        return redirect()->route('extra.index');   
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
        $extra = Extra::where('id', $id)->first();
        if (!$extra) {
            return redirect()->back();
        }
        return view('extra.add', ['extra' => $extra]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateExtraRequest $request, $id)
    {
        $extra = Extra::where('id', $id)->first();
        if (!$extra) {
            return redirect()->route('extra.index');
        }
        $extra->nome = $request->input('nome');
        $extra->desc = $request->input('desc');
        $extra->tipo = $request->input('tipo');
        $extra->preco = $request->input('preco');
        if($request->hasfile('imagem')){
            $file = $request->file('imagem');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/extras', $filename);
            $extra->imagem = $filename;
        }
        $extra->save();
        Session::flash('mensagem_sucesso', 'Extra editado com sucesso!');
        return redirect()->route('extra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extra = Extra::where('id', $id)->first();
        if (!$extra) {
            return redirect()->back();
        }
        $extra->delete();
        Session::flash('mensagem_sucesso', 'Extra excluído com sucesso!');
        return redirect()->route('extra.index');
    }
}
