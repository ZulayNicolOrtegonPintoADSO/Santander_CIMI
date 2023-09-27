@extends('layouts.app')

@section('content')

  {{-- CONTENEDOR DE LOS MODALES --}}
  <div>
    {{-- Vista del modal para agregar --}}
    <div class="modal fade" id="modalAgg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="codigo" class="col-md-4 col-form-label ">{{ __('Codigo:') }}</label>
                <input id="number" type="email" class="form-control @error('Correo') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <div>Nombre:</div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>

    

    {{-- Vista del modal para editar --}}
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>
</div>


{{-- CONTENEDOR DEL CRUD --}}
<div class="container text-center">
  <div class="row">

    <button type="button" class="btn btn-success form-control fs-4" data-bs-toggle="modal" data-bs-target="#modalAgg">
        + Agregar municipio
    </button>

    {{-- Tabla que muestra los municipios --}}
      <table class="table mt-5 border">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($municipios as $municipio)
            <tr>
              <th scope="row">{{ $municipio->codigo }}</th>
              <td>{{ $municipio->nombre }}</td>
    
              <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEdit">
                  Editar municipio
                </button>

                <a href="{{route('eliminar')}}" class="btn btn-danger">Eliminar</a>
              </td>
    
            </tr>
          @endforeach 
        </tbody>
      </table>

  </div>
</div>

@endsection