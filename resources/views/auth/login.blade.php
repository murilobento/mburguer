@extends('layouts.app3')

@section('title', 'Login')

@section('content')

<div class="accountbg"></div>
<div class="wrapper-page">

    <div class="card">
        <div class="card-body">
            <h3 class="text-center mt-0 m-b-15 logo logo-admin">
                BURGUER
            </h3>
            <div class="p-3">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-12">
                            <input id="email" type="email" placeholder="E-mail"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <input id="password" type="password" placeholder="Senha"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group text-center row m-t-20">
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger btn-block waves-effect waves-light">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-sm-7 m-t-20">
                            <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i>
                                <small>Esqueceu sua senha?</small></a>
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