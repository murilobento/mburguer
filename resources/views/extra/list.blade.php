@extends('layouts.app3')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title"></h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card m-b-30">
            <div class="card-body table-responsive">
                <h5 class="header-title">Listagem de Extras</h5>
                <p class="text-muted">Para visualisar os detalhes, clique sobre o nome do extra. </p>
                <div class="">
                    <table id="datatable2" class="table">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">Tipo</th>
                                <th width="50%">Nome</th>
                                <th width="10%">Preço</th>
                                <th width="10%">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Acompanhamento</td>
                                <td><a href="{{ url('/ver/extra/1') }}">Batata Rústica</a></td>
                                <td>10,00</td>
                                <td> <a href="{{ url('/edit/extra/1') }}"><i class="fa fa-edit"></i></a>   <a
                                        href="{{ url('/del/extra/1') }}"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Suco</td>
                                <td><a href="{{ url('/ver/extra/2') }}">Suco de Laranja</a></td>
                                <td>7,00</td>
                                <td> <a href="{{ url('/edit/extra/2') }}"><i class="fa fa-edit"></i></a>   <a
                                        href="{{ url('/del/extra/2') }}"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Adicional</td>
                                <td><a href="{{ url('/ver/extra/3') }}">Bacon</a></td>
                                <td>5,00</td>
                                <td> <a href="{{ url('/edit/extra/3') }}"><i class="fa fa-edit"></i></a>   <a
                                        href="{{ url('/del/extra/3') }}"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Drink</td>
                                <td><a href="{{ url('/ver/extra/4') }}">Cuba Libre</a></td>
                                <td>12,00</td>
                                <td> <a href="{{ url('/edit/extra/4') }}"><i class="fa fa-edit"></i></a>   <a
                                        href="{{ url('/del/extra/4') }}"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Cerveja</td>
                                <td><a href="{{ url('/ver/extra/5') }}">Long Neck Becks 350ml</a></td>
                                <td>8,00</td>
                                <td> <a href="{{ url('/edit/extra/5') }}"><i class="fa fa-edit"></i></a>   <a
                                        href="{{ url('/del/extra/5') }}"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Refrigerante</td>
                                <td><a href="{{ url('/ver/extra/6') }}">Coca Coca Zero 350ml</a></td>
                                <td>5,00</td>
                                <td> <a href="{{ url('/edit/extra/6') }}"><i class="fa fa-edit"></i></a>   <a
                                        href="{{ url('/del/extra/6') }}"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end row-->
@endsection