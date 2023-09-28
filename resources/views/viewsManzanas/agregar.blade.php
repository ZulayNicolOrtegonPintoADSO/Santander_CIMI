@extends('layouts.app')

@section('content')




<div class="container ">
  <div class="row">
    <div class="">
      <form method="POST" action="{{ route('aggManzana') }}">
          @csrf
        
            <div class="">
              <label for="nombre" class="col-md-4 col-form-label ">{{ __('Nombre:') }}</label>
              <input name="nombre" type="text" class="form-control"  autofocus>
            </div>

            <div class="">
              <label for="localidad" class="col-md-4 col-form-label ">{{ __('Localidad:') }}</label>
              <input name="localidad" type="text" class="form-control"  autofocus>
            </div>

            <div class="">
              <label for="direccion" class="col-md-4 col-form-label ">{{ __('Direccion:') }}</label>
              <input name="direccion" type="text" class="form-control"  autofocus>
            </div>

            <div class="">
              <label for="fk_cod_municipio" class="col-md-4 col-form-label ">{{ __('Municipio:') }}</label>
      
              <select name="fk_cod_municipio" class="form-control">
                <option value="">Escoge uno de estos municipios</option>
      
                @foreach ($municipios as $municipio)
                    <option value="{{ $municipio->codigo }}">{{ $municipio->nombre }}</option>
                @endforeach
              </select>
            </div>


            <div class="mt-3">
              <button type="submit" class="btn btn-primary form-control">Agregar</button>
            </div>
      </form>
    </div>
  </div>
</div>

@endsection