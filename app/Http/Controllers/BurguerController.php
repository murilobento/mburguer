<?php

namespace App\Http\Controllers;

use App\Burguer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreUpdateBurguerRequest;
use Redirect;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Facades\Storage;

class BurguerController extends Controller
{
    protected $request;
    private $repository;

    public function __construct(Request $request, Burguer $burguer)
    {
        $this->request = $request;
        $this->repository = $burguer;

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $burguers = Burguer::where('status',1)->orderBy('nome')->paginate(15);
        return view('burguer.list', ['burguers' => $burguers]);
    }
     /**
     * Display a listing of the inactive resource .
     *
     * @return \Illuminate\Http\Response
     */
    public function inactive()
    {
        $burguers = Burguer::where('status',0)->orderBy('nome')->paginate(15);
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
        $data = $request->all();
        if ($request->hasFile('imagem') && $request->imagem->isValid()){
            $path = $request->imagem->store('burguers');
            $data['imagem'] = $path;
        }
        Burguer::create($data);
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
        if (!$burguer = $this->repository->find($id)){
            return redirect()->back();
        }
        $data = $request->all();      
        
        if ($request->hasFile('imagem') && $request->imagem->isValid()){
            if ($burguer->imagem && Storage::exists($burguer->imagem)) {
                Storage::delete($burguer->imagem);
            }
            $path = $request->imagem->store('burguers');
            $data['imagem'] = $path;
        }
        $burguer->update($data);
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
        $burguer = $this->repository->where('id', $id)->first();
        if(!$burguer){
            return redirect()->back();
        }
        if ($burguer->imagem && Storage::exists($burguer->imagem)) {
            Storage::delete($burguer->imagem);
        }
        $burguer->delete();
        Session::flash('mensagem_sucesso', 'Burguer excluído com sucesso!');
        return redirect()->route('burguer.index');
    }
}
