@extends('layouts.app')

@section('content')

{{-- Contenedor de la vista de editar --}}
<div class="container">
  {{-- Fila --}}
  <div class="row">

    {{-- Formulario y ruta para enviar a la vista de ediatr --}}
    <form method="POST" action="{{ route('editManzana', $manzana->codigo) }}">
    
        @csrf
          {{-- Campos correspondientes --}}
          <div class="">
            <label for="nombre" class="col-md-4 col-form-label ">{{ __('Nombre:') }}</label>
            <input name="nombre" type="text" class="form-control"  value="{{ $manzana->nombre }}" autofocus>
          </div>
          {{-- Campos correspondientes --}}
          <div class="">
            <label for="localidad" class="col-md-4 col-form-label ">{{ __('Localidad:') }}</label>
            <input name="localidad" type="text" class="form-control" value="{{ $manzana->localidad }}" autofocus>
          </div>
          {{-- Campos correspondientes --}}
          <div class="">
            <label for="direccion" class="col-md-4 col-form-label ">{{ __('Direccion:') }}</label>
            <input name="direccion" type="text" class="form-control" value="{{ $manzana->direccion }}" autofocus>
          </div>
          {{-- Campos correspondientes --}}
          <div class="">
            <label for="fk_cod_municipio" class="col-md-4 col-form-label ">{{ __('Municipio:') }}</label>
            
            {{-- Imprimiendo tabla editar --}}
            <select name="fk_cod_municipio" class="form-control">
              <option value="{{ $manzana->fk_cod_municipio }}">{{ $manzana->fk_cod_municipio }}</option>
    
              @foreach ($municipios as $municipio)
                  <option value="{{ $municipio->codigo }}">{{ $municipio->nombre }}</option>
              @endforeach
            </select>
          </div>

          {{-- Boton para editar definitivamente el municipio
             --}}
          <div class="">
            <button type="submit" class="btn btn-primary form-control mt-4">Editar</button>
          </div>
    </form>
  </div>
</div>

@endsection