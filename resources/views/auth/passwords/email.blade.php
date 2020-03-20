@extends('layouts.app3')

@section('title', 'Redefina sua senha')

@section('content')
<div class="accountbg"></div>
<div class="wrapper-page">
    <div class="card">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <h3 class="text-center mt-0 m-b-15">
                <a href="index.html" class="logo logo-admin">BURGUER</a>
            </h3>
            <div class="p-3">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Enviaremos instruções para seu <b>e-mail</b>.
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="email" placeholder="Seu e-mail" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group text-center row m-t-20">
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger btn-block waves-effect waves-light">
                                {{ __('Enviar e-mail') }}
                            </button>
                        </div>
                    </div>
                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-sm-7 m-t-20">
                            <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-login"></i>
                                <small>Lembrou sua senha?</small></a>
                        </div>
                        <div class="col-sm-5 m-t-20">
                            <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i>
                                <small>Criar uma conta?</small></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection