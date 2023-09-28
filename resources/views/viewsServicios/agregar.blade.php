@extends('layouts.app')

@section('content')



{{-- Contenedor de la vista de editar Servicio --}}
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
          {{-- Campo necesario --}}
            <div class="">
              <label for="descripcion" class="col-md-4 col-form-label ">{{ __('Descripcion:') }}</label>
              <input name="descripcion" type="text" class="form-control"  autofocus>
            </div>
          {{-- Campo necesario --}}
            <div class="">
              <label for="fk_cod_categoria" class="col-md-4 col-form-label ">{{ __('Categoria:') }}</label>
          {{-- Campo necesario --}} 
              <select name="fk_cod_categoria" class="form-control">
                <option value="">Escoge uno de estos ...</option>
      
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->codigo }}">{{ $categoria->nombre }}</option>
                @endforeach
              </select>
            </div>

            <div class="">
              <label for="fk_cod_establecimiento" class="col-md-4 col-form-label ">{{ __('Establecimiento:') }}</label>
          {{-- Campo necesario --}}
              <select name="fk_cod_establecimiento" class="form-control">
                <option value="">Escoge uno de estos ...</option>
      
                {{-- Imprimiendo datos de la tabla Servicios --}}
                @foreach ($establecimientos as $establecimiento)
                    <option value="{{ $establecimiento->codigo }}">{{ $establecimiento->nombre }}</option>
                @endforeach
              </select>
            </div>

<<<<<<< HEAD

            {{-- Boton para agregar el nuevo servicio --}}
=======
            {{-- Boton para agregar el nuevo municipio --}}
>>>>>>> a597acbd83b53460284a0c5e7d349079bf871341
            <div class="mt-3">
              <button type="submit" class="btn btn-success form-control">Agregar</button>
            </div>

      </form>
    </div>
  </div>
</div>

@endsection