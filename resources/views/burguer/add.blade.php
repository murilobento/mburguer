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
                        <form action="{{ route('burguer.update', $burguer->id)  }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('burguer.form')
                        </form>

                        @else
                        @section('title', 'Cadastro de Burguers')

                        <h4 class="mt-0 header-title">Cadastro de Burguers</h4>
                        <p class="text-muted m-b-30">Ver lista de burguers cadastrados <a
                                href="{{ route('burguer.index') }}">clique aqui</a>.</p>
                        <form action="{{ route('burguer.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('burguer.form')
                        </form>
                        @endif
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container -->
</div> <!-- Page content Wrapper -->
@endsection