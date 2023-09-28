@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('editManzana', $manzana->codigo) }}">

    @csrf

      <div class="">
        <label for="nombre" class="col-md-4 col-form-label ">{{ __('Nombre:') }}</label>
        <input name="nombre" type="text" class="form-control"  value="{{ $manzana->nombre }}" autofocus>
      </div>

      <div class="">
        <label for="localidad" class="col-md-4 col-form-label ">{{ __('Localidad:') }}</label>
        <input name="localidad" type="text" class="form-control" value="{{ $manzana->localidad }}" autofocus>
      </div>

      <div class="">
        <label for="direccion" class="col-md-4 col-form-label ">{{ __('Direccion:') }}</label>
        <input name="direccion" type="text" class="form-control" value="{{ $manzana->direccion }}" autofocus>
      </div>

      <div class="">
        <label for="fk_cod_municipio" class="col-md-4 col-form-label ">{{ __('Municipio:') }}</label>
        <input name="fk_cod_municipio" type="text" class="form-control" value="{{ $manzana->fk_cod_municipio}}" autofocus>
      </div>

      <div class="">
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>

</form>

@endsection