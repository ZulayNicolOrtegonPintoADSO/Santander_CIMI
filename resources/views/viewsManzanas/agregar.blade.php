@extends('layouts.app')

@section('content')




<div class="container ">
  <div class="row">
    <div class="">
      <form method="POST" action="{{ route('aggMunicipio') }}">
          @csrf
        
            <div class="">
              <label for="nombre" class="col-md-4 col-form-label ">{{ __('Nombre:') }}</label>
              <input name="nombre" type="text" class="form-control"  autofocus>
            </div>
      
            <div class="mt-3">
              <button type="submit" class="btn btn-primary form-control">Agregar</button>
            </div>
      </form>
    </div>
  </div>
</div>

@endsection