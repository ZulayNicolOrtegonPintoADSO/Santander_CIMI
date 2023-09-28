@extends('layouts.app')

@section('content')



{{-- Contenedor de la vista de editar Municipio --}}
<div class="container ">
  <div class="row">
    <div class="">
      {{-- Llamamos la ruta y creamos el formulario--}}
      <form method="POST" action="{{ route('aggServicio') }}">
          @csrf
          
          {{-- Campo necesario --}}
            <div class="">
              <label for="nombre" class="col-md-4 col-form-label ">{{ __('Nombre:') }}</label>
              <input name="nombre" type="text" class="form-control"  autofocus>
            </div>

            <div class="">
              <label for="descripcion" class="col-md-4 col-form-label ">{{ __('Descripcion:') }}</label>
              <input name="descripcion" type="text" class="form-control"  autofocus>
            </div>

            <div class="">
              <label for="fk_cod_categoria" class="col-md-4 col-form-label ">{{ __('Categoria:') }}</label>
      
              <select name="fk_cod_categoria" class="form-control">
                <option value="">Escoge uno de estos ...</option>
      
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->codigo }}">{{ $categoria->nombre }}</option>
                @endforeach
              </select>
            </div>

            <div class="">
              <label for="fk_cod_establecimiento" class="col-md-4 col-form-label ">{{ __('Establecimiento:') }}</label>
      
              <select name="fk_cod_establecimiento" class="form-control">
                <option value="">Escoge uno de estos ...</option>
      
                @foreach ($establecimientos as $establecimiento)
                    <option value="{{ $establecimiento->codigo }}">{{ $establecimiento->nombre }}</option>
                @endforeach
              </select>
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