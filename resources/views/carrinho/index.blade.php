@extends('layouts.app3')

@section('title', 'Abrir Pedido')

@section('content')


<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Listagem de Burguers</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            @foreach ($burguers as $burguer)


            <div class="col-md-6 col-lg-6 col-xl-2">

                <!-- Simple card -->
                <div class="card m-b-30">
                    @if ($burguer->imagem)
                    <a class="image-popup-vertical-fit" href="{{ url("/storage/{$burguer->imagem}") }}"
                        title="{{ $burguer->nome }}">
                        <img class="card-img-top img-fluid img-responsive"
                            src="{{ url("/storage/{$burguer->imagem}") }}" alt="{{ $burguer->nome }}">
                    </a>
                    @else
                    <a class="image-popup-vertical-fit"
                        href="https://dummyimage.com/770x420/1c1c1c/ffffff.jpg&text=sem+imagem" title="">
                        <img class="card-img-top img-fluid img-responsive"
                            src="https://dummyimage.com/770x420/1c1c1c/ffffff.jpg&text=sem+imagem" alt="">
                    </a>
                    @endif
                    <div class="card-body">
                        <h4 class="card-title font-16 mt-0">{{ $burguer->nome }}</h4>
                        <p class="card-text font-12"><a href="#" type="button" data-toggle="modal"
                                data-animation="bounce" data-target="#modal-burguer-{{ $burguer->id }}">Descrição</a>
                        </p>
                        <div class="modal fade bs-example-modal-sm" id="modal-burguer-{{ $burguer->id }}" tabindex="-1">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-16 mt-0" id="mySmallModalLabel">Descrição do
                                            {{ $burguer->nome }}</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea name="desc" class="form-control" rows="5"
                                            disabled>{{ $burguer->desc }}</textarea>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                            data-animation="bounce" data-target=".bs-example-modal-center"><i
                                class="fa fa-shopping-cart"></i> Adicionar</button>


                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Observações:</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label class="col-md-6 my-1 control-label">Ponto</label>
                                        <div class="form-check my-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio4" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio4">Bem
                                                    passada</label>
                                            </div>
                                        </div>
                                        <div class="form-check my-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio5" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio5">Ao ponto</label>
                                            </div>
                                        </div>
                                        <div class="form-check my-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio6" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio6">Mal
                                                    passada</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Observação</span>
                                            </div>
                                            <textarea name="desc" class="form-control" aria-label="With textarea"
                                                rows="5"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer ">
                                        <button type="button" class="btn btn-success"
                                            data-dismiss="modal">Cancelar</button>
                                        <button type="submit" name="" class="btn btn-danger" data-dismiss="modal"
                                            onclick="formSubmit()">Adicionar ao pedido</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                </div>
            </div><!-- end col -->
            @endforeach
        </div><!-- end row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Listagem de Extra</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            @foreach ($extras as $extra)


            <div class="col-md-6 col-lg-6 col-xl-2">

                <!-- Simple card -->
                <div class="card m-b-30">
                    @if ($burguer->imagem)
                    <a class="image-popup-vertical-fit" href="{{ url("/storage/{$burguer->imagem}") }}"
                        title="{{ $burguer->nome }}">
                        <img class="card-img-top img-fluid img-responsive"
                            src="{{ url("/storage/{$burguer->imagem}") }}" alt="{{ $burguer->nome }}">
                    </a>
                    @else
                    <a class="image-popup-vertical-fit"
                        href="https://dummyimage.com/770x420/1c1c1c/ffffff.jpg&text=sem+imagem" title="">
                        <img class="card-img-top img-fluid img-responsive"
                            src="https://dummyimage.com/770x420/1c1c1c/ffffff.jpg&text=sem+imagem" alt="">
                    </a>
                    @endif
                    <div class="card-body">
                        <h4 class="card-title font-16 mt-0">{{ $extra->nome }}</h4>
                        <p class="card-text font-12"><a href="#" type="button" data-toggle="modal"
                                data-animation="bounce" data-target="#modal-extra-{{ $extra->id }}">Descrição</a></p>
                        <div class="modal fade bs-example-modal-sm" id="modal-extra-{{ $extra->id }}" tabindex="-1">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-16 mt-0" id="mySmallModalLabel">Descrição do
                                            {{ $extra->nome }}</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea name="desc" class="form-control" rows="5"
                                            disabled>{{ $extra->desc }}</textarea>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- Small modal -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                            data-animation="bounce" data-target=".bs-example-modal-center"><i
                                class="fa fa-shopping-cart"></i> Adicionar</button>


                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Observações:</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label class="col-md-6 my-1 control-label">Ponto</label>
                                        <div class="form-check my-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio4" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio4">Bem
                                                    passada</label>
                                            </div>
                                        </div>
                                        <div class="form-check my-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio5" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio5">Ao ponto</label>
                                            </div>
                                        </div>
                                        <div class="form-check my-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio6" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio6">Mal
                                                    passada</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Observação</span>
                                            </div>
                                            <textarea name="desc" class="form-control" aria-label="With textarea"
                                                rows="5"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer ">
                                        <button type="button" class="btn btn-success"
                                            data-dismiss="modal">Cancelar</button>
                                        <button type="submit" name="" class="btn btn-danger" data-dismiss="modal"
                                            onclick="formSubmit()">Adicionar ao pedido</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                </div>
            </div><!-- end col -->
            @endforeach
        </div><!-- end row -->
    </div><!-- container -->
</div> <!-- Page content Wrapper -->

@endsection