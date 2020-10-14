@extends('layouts.app')

@section('content')
    <br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="navbar navbar-dark bg-primary ">
                        <div class="align-center" >
                            <h3>{{ __('Inicia sesión') }}</h3></div>
                        </div>


                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="px-2 py-9">
                            @csrf
                            <div class="form-group row">


                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control
                                    @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email"
                                           autofocus placeholder="Correo electrónico o número de teléfono">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="current-password"
                                           placeholder="Contraseña">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 ">
                                    <a class="navbar-brand">
                                        <button type="submit" class="btn btn-primary ">
                                            {{ __('Iniciar sesión') }}
                                        </button>
                                    </a>
                                    <div class="cols-md-12">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('¿Has olvidado tu contraseña?') }}
                                            </a>
                                        @endif

                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
