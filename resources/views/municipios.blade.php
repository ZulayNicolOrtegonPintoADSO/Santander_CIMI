@extends('layouts.app')

@section('content')

<div class="container">

    {{-- <div class="nav btn btn-success"><nav>+ Agregar municipio</nav></div> --}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        + Agregar municipio
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('home') }}">
                    <label for="codigo" class="col-md-4 col-form-label ">{{ __('Codigo:') }}</label>
                    <input id="codigo" type="number" class="form-control"  autofocus>
                    <label for="nombre" class="col-md-4 col-form-label ">{{ __('Nombre:') }}</label>
                    <input id="nombre" type="text" class="form-control"  autofocus>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
          </div>
        </div>
    </div>

    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1">
        Editar municipio
    </button>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('home') }}">
                    <label for="codigo" class="col-md-4 col-form-label ">{{ __('Codigo:') }}</label>
                    <input id="codigo" type="number" class="form-control"  autofocus>
                    <label for="nombre" class="col-md-4 col-form-label ">{{ __('Nombre:') }}</label>
                    <input id="nombre" type="text" class="form-control"  autofocus>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Editado</button>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection