@extends('layouts.app3')

@section('title', 'Erro 404')

@section('content')
<!-- Begin page -->
<div class="accountbg"></div>
<div class="wrapper-page">

    <div class="card">
        <div class="card-block">

            <div class="ex-page-content text-center">
                <h1 class="">500!</h1>
                <h3 class="">Página não encontrada.</h3><br>

                <a class="btn btn-danger mb-5 waves-effect waves-light" href="{{ route('home') }}">Voltar para a home</a>
            </div>

        </div>
    </div>
</div>
@endsection