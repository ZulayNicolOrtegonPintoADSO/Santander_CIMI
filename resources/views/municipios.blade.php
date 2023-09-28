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

    

    {{-- Vista del modal para editar --}}
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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



<div class="card text-bg-dark">
    <img src="{{asset ('imagenes/manzana_card.jpg')}}" class="card-img" alt="...">
    <div class="card-img-overlay">
      
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
        <div>
            <a href="{{route('home')}}" class=" boton btn btn-primary"> Atras </a>
        </div>
    </div>

</div>       
{{-- CONTENEDOR DEL CRUD --}}


@endsection