<?php

namespace App\Http\Controllers;

use App\Extra;
use App\Http\Requests\StoreUpdateExtraRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ExtraController extends Controller
{
    protected $request;
    private $repository;

    public function __construct(Request $request, Extra $extra)
    {
        $this->request = $request;
        $this->repository = $extra;

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = Extra::where('status',1)->orderBy('nome')->paginate(15);
        return view('extra.list', ['extras' => $extras]);
    }
     /**
     * Display a listing of the inactive resource .
     *
     * @return \Illuminate\Http\Response
     */
    public function inactive()
    {
        $extras = Extra::where('status',0)->orderBy('nome')->paginate(15);
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

        $data = $request->all();
        if ($request->hasFile('imagem') && $request->imagem->isValid()){
            $path = $request->imagem->store('extras');
            $data['imagem'] = $path;
        }
        Extra::create($data);
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
        if (!$extra = $this->repository->find($id)){
            return redirect()->back();
        }
        $data = $request->all();      
        
        if ($request->hasFile('imagem') && $request->imagem->isValid()){
            if ($extra->imagem && Storage::exists($extra->imagem)) {
                Storage::delete($extra->imagem);
            }
            $path = $request->imagem->store('extras');
            $data['imagem'] = $path;
        }
        $extra->update($data);
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
        $extra = $this->repository->where('id', $id)->first();
        if(!$extra){
            return redirect()->back();
        }
        if ($extra->imagem && Storage::exists($extra->imagem)) {
            Storage::delete($extra->imagem);
        }
        $extra->delete();
        Session::flash('mensagem_sucesso', 'Extra excluído com sucesso!');
        return redirect()->route('extra.index');
    }
}
