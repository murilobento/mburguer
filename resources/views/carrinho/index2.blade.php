@extends('layouts.app3')

@section('title', 'Abrir Pedido')

@section('content')


<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Listagem de Produtos</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            @foreach ($produtos as $produto)

            
            <div class="col-md-6 col-lg-6 col-xl-3">

                <!-- Simple card -->
                <div class="card m-b-30">
                    <form action="{{ route('produto.store') }}" method="post" id="carrinhoForm">
                    @csrf
                    @if ($produto->imagem)
                    <a class="image-popup-vertical-fit" href="{{ url("/storage/{$produto->imagem}") }}"
                        title="{{ $produto->nome }}">
                        <img class="card-img-top img-fluid img-responsive"
                            src="{{ url("/storage/{$produto->imagem}") }}" alt="{{ $produto->nome }}">
                    </a>
                    @else
                    <a class="image-popup-vertical-fit"
                        href="https://dummyimage.com/770x420/1c1c1c/ffffff.jpg&text=sem+imagem" title="">
                        <img class="card-img-top img-fluid img-responsive"
                            src="https://dummyimage.com/770x420/1c1c1c/ffffff.jpg&text=sem+imagem" alt="">
                    </a>
                    @endif
                    <div class="card-body">
                        <h4 class="card-title font-16 mt-0">{{ $produto->nome }} (R$ {{ number_format($produto->preco, 2) }})</h4>
                        @if($produto->tipo === "Burguer")<h4 class="badge badge-pill badge-primary font-12 mt-0">{{ $produto->tipo }}</h4>
                        @elseif($produto->tipo === "Cerveja")<h4 class="badge badge-pill badge-danger font-12 mt-0">{{ $produto->tipo }}</h4>
                        @elseif($produto->tipo === "Suco")<h4 class="badge badge-pill badge-success font-12 mt-0">{{ $produto->tipo }}</h4>
                        @elseif($produto->tipo === "Acompanhamento")<h4 class="badge badge-pill badge-warning font-12 mt-0">{{ $produto->tipo }}</h4>
                        @elseif($produto->tipo === "Adicional")<h4 class="badge badge-pill badge-info font-12 mt-0">{{ $produto->tipo }}</h4>                        
                        @elseif($produto->tipo === "Refrigerante")<h4 class="badge badge-pill badge-default font-12 mt-0">{{ $produto->tipo }}</h4>                        
                        @endif
                        <p class="card-text font-12"><a href="#" type="button" data-toggle="modal"
                                data-animation="bounce" data-target="#modal-produto-{{ $produto->id }}">Descrição</a>
                        </p>
                        <div class="modal fade bs-example-modal-center" id="modal-produto-{{ $produto->id }}" tabindex="-1">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-16 mt-0" id="mySmallModalLabel">Descrição do
                                            {{ $produto->nome }}</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">                                        
                                        <textarea name="desc" class="form-control" rows="5"
                                            disabled>{{ $produto->desc }}</textarea>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->                    
                        @if($produto->tipo === 'Burguer')
                        <button type="submit" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                            data-animation="bounce" data-target="#modal-ponto-{{ $produto->id }}"><i
                                class="fa fa-shopping-cart"></i> Adicionar</button>


                        <div class="modal fade bs-example-modal-center" id="modal-ponto-{{ $produto->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Observações do {{ $produto->nome }}</h5>
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
                        @else
                        <button type="submit"  class="btn btn-primary waves-effect waves-light"><i class="fa fa-shopping-cart"></i> Adicionar</button>
                        @endif
                    </form>
                    </div>
                </div>
            </div><!-- end col -->
            @endforeach
        </div><!-- end row -->
    </div><!-- container -->
</div> <!-- Page content Wrapper -->
<script>
     function formSubmit()
    {
        $("#carrinhoForm").submit();
    }
</script>
@endsection