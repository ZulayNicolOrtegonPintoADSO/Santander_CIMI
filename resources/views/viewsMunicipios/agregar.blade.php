@extends('layouts.app')

@section('content')



{{-- Contenedor de la vista de editar Municipio --}}
<div class="container ">
  <div class="row">
    <div class="">
      {{-- Llamamos la ruta y creamos el formulario--}}
      <form method="POST" action="{{ route('aggMunicipio') }}">
          @csrf
          {{-- Campo necesario --}}
            <div class="">
              <label for="nombre" class="col-md-4 col-form-label ">{{ __('Nombre:') }}</label>
              <input name="nombre" type="text" class="form-control"  autofocus>
            </div>
            {{-- Boton para agregar el nuevo municipio --}}
            <div class="mt-3">
              <button type="submit" class="btn btn-success form-control">Agregar</button>
            </div>
      </form>
    </div>
  </div>
</div>

@endsection