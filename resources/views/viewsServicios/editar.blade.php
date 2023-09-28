@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    {{-- Formulario con la ruta hacia la vista de editar --}}
    <form method="POST" action="{{ route('editServicio', $servicio->codigo) }}">
    
        @csrf
    
          <div class="">
            <label for="nombre" class="col-md-4 col-form-label ">{{ __('Nombre:') }}</label>
            <input name="nombre" type="text" class="form-control" value="{{ $servicio->nombre }}" autofocus>
          </div>
    
          <div class="">
            <label for="descripcion" class="col-md-4 col-form-label ">{{ __('Descripcion:') }}</label>
            <input name="descripcion" type="text" class="form-control" value="{{ $servicio->descripcion }}" autofocus>
          </div>
    
          <div class="">
            <label for="fk_cod_categoria" class="col-md-4 col-form-label ">{{ __('Categoria:') }}</label>
    
            <select name="fk_cod_categoria" class="form-control">
              <option value="{{ $servicio->fk_cod_categoria }}">{{ $servicio->fk_cod_categoria }}</option>
    
              @foreach ($categorias as $categoria)
                  <option value="{{ $categoria->codigo }}">{{ $categoria->nombre }}</option>
              @endforeach
            </select>
          </div>
    
          <div class="">
            <label for="fk_cod_establecimiento" class="col-md-4 col-form-label ">{{ __('Establecimiento:') }}</label>
    
            <select name="fk_cod_establecimiento" class="form-control">
              <option value="{{ $servicio->fk_cod_establecimiento }}">{{ $servicio->fk_cod_establecimiento }}</option>
    
              @foreach ($establecimientos as $establecimiento)
                  <option value="{{ $establecimiento->codigo }}">{{ $establecimiento->nombre }}</option>
              @endforeach
            </select>
          </div>
    
          <div class="">
            <button type="submit" class="btn btn-primary form-control mt-4">Editar</button>
          </div>

    </form>
  </div>
</div>


@endsection