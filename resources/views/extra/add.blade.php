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
                        <h4 class="mt-0 header-title">Cadastro de Extras</h4>
                        <p class="text-muted m-b-30 font-14">Ver lista de extras cadastrados <a
                                href="{{ url('extras') }}">clique aqui</a>.</p>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-normal">Tipo</span>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect04">
                                        <option>Acompanhamento</option>
                                        <option>Adicional</option>
                                        <option>Cerveja</option>
                                        <option>Drink</option>
                                        <option>Refrigerante</option>
                                        <option>Suco</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 ml-auto input-group mt-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-normal">Nome</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Normal"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 ml-auto input-group mt-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Descrição</span>
                                    </div>
                                    <textarea class="form-control" aria-label="With textarea" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 ml-auto input-group mt-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-normal">Preço</span>
                                </div>
                                <input type="number" class="form-control" aria-label="Normal"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 ml-auto input-group mt-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-normal">Imagem</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04"> clique aqui.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-items">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container -->
</div> <!-- Page content Wrapper -->
@endsection