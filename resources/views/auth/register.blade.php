@extends('layouts.app3')

@section('title', 'Registrar')

@section('content')

<div class="accountbg"></div>
<div class="wrapper-page">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center mt-0 m-b-15 logo logo-admin">
                BURGUER
            </h3>
            <div class="p-3">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-12">
                            <input id="name" placeholder="Nome" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <input id="email" placeholder="E-mail" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <input id="password" placeholder="Senha" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <input id="password-confirm" placeholder="Repita a senha" type="password"
                                class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group text-center row m-t-20">
                        <div class="col-12">

                            <button type="submit" class="btn btn-danger btn-block waves-effect waves-light">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </div>
                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-12 m-t-20 text-center">
                            <a href="{{ route('login') }}" class="text-muted">Já tem uma conta?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection