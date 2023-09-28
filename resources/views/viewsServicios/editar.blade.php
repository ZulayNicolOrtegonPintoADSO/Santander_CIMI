@extends('layouts.app')

@section('content')
{{-- Formulario con la ruta hacia la vista de editar --}}
<form method="POST" action="{{ route('editMunicipio', $municipio->codigo) }}">

    @csrf

    <div class="">
        <label for="nombre" class="col-md-4 col-form-label ">{{ __('Código:') }}</label>
        <input id="codigo" type="text" class="form-control" value="{{ $municipio->codigo }}" autofocus>
      </div>

      <div class="">
        <label for="nombre" class="col-md-4 col-form-label ">{{ __('Nombre:') }}</label>
        <input name="nombre" type="text" class="form-control"  value="{{ $municipio->nombre }}" autofocus>
      </div>

      {{-- Boton para editar definitiamente el servicio --}}
      <div class="">
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>

</form>

@endsection