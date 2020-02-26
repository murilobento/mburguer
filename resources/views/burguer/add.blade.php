@extends('layouts.app3')



@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title"></h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <!--add alerts-->
                        @include('layouts.alerts')
                        
                        @if(Request::is('*/edit'))
                        @section('title', 'Edição de Burguers')

                        <h4 class="mt-0 header-title">Edição de Burguers</h4>
                        <p class="text-muted m-b-30">Ver lista de burguers cadastrados <a
                                href="{{ route('burguer.index') }}">clique aqui</a>.</p>
                                <form action="{{ route('burguer.update', $burguer->id)  }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group row">
                                        <div class="col-sm-12 ml-auto input-group mt-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-normal">Nome</span>
                                            </div>
                                            <input name="nome" type="text" class="form-control" aria-label="Normal"
                                                aria-describedby="inputGroup-sizing-sm" value="{{ $burguer->nome }}">
                                        </div>
                                        
                                    </div>                                    
                                    <div class="form-group row">
                                        <div class="col-sm-12 ml-auto input-group mt-1">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Descrição</span>
                                                </div>
                                                <textarea name="desc" class="form-control" aria-label="With textarea"
                                                    rows="5">{{ $burguer->desc }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 ml-auto input-group mt-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-normal">Preço</span>
                                            </div>
                                            <input name="preco" type="text" class="form-control" aria-label="Normal"
                                                aria-describedby="inputGroup-sizing-sm" value="{{ $burguer->preco }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 ml-auto input-group mt-1">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-normal">Imagem</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input name="imagem" type="file" class="custom-file-input" id="imagem"
                                                        value="{{ old('imagem') }}">
                                                    <label class="custom-file-label" for="inputGroupFile04"> clique
                                                        aqui.</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 ml-auto input-group mt-1">
                                            <a class="image-popup-vertical-fit" href="/uploads/burguers/{{ $burguer->imagem }}" title="{{ $burguer->nome }}">
                                                <img class="img-responsive" src="/uploads/burguers/{{ $burguer->imagem }}"  width="145">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="button-items">
                                        <button type="submit" class="btn btn-success btn-lg">Editar</button>
                                        <a href="{{ route('burguer.index')  }}" type="button" class="btn btn-danger btn-lg ">Cancelar</a>
                                    </div>
                                </form>


                        @else
                        @section('title', 'Cadastro de Burguers')

                        <h4 class="mt-0 header-title">Cadastro de Burguers</h4>
                        <p class="text-muted m-b-30">Ver lista de burguers cadastrados <a
                                href="{{ route('burguer.index') }}">clique aqui</a>.</p>
                        <form action="{{ route('burguer.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 ml-auto input-group mt-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-normal">Nome</span>
                                    </div>
                                    <input name="nome" type="text" class="form-control" aria-label="Normal"
                                        aria-describedby="inputGroup-sizing-sm" value="{{old('nome')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 ml-auto input-group mt-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Descrição</span>
                                        </div>
                                        <textarea name="desc" class="form-control" aria-label="With textarea"
                                            rows="5">{{old('desc')}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 ml-auto input-group mt-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-normal">Preço</span>
                                    </div>
                                    <input name="preco" type="text" class="form-control" aria-label="Normal"
                                        aria-describedby="inputGroup-sizing-sm" value="{{old('preco')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 ml-auto input-group mt-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-normal">Imagem</span>
                                        </div>
                                        <div class="custom-file">
                                            <input name="imagem" type="file" class="custom-file-input" id="imagem"
                                                value="{{ old('imagem') }}">
                                            <label class="custom-file-label" for="inputGroupFile04"> clique
                                                aqui.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-items">
                                <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                                <a href="{{ route('burguer.index')  }}" type="button" class="btn btn-danger btn-lg ">Cancelar</a>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container -->
</div> <!-- Page content Wrapper -->
@endsection