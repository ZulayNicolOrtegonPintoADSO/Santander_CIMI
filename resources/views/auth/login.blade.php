@extends('layouts.app')

@section('content')


<div class="container">
    <div class="titulo">LOGUEATE</div>
    <div class="row">
        <div class="col-6">
            <img class ="registro"src="{{asset ('imagenes/login.jpg')}}" alt="">
            <div class="text-center">
                <a href="{{ route('register') }}">
                    ¿Ya estas registrado?,
                    <br>Registrate aqui
                </a>
            </div>
        </div>

        
        <div class="col-6">   
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre de usuario') }}</label>
            
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Logueate') }}
                                        </button>
                                    </div>
                                </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 
