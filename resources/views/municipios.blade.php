@extends('layouts.app')

@section('content')
{{-- Contendor de la vista --}}
<div class="card text-bg-dark">
  {{-- Imagen de fondo --}}
    <img src="{{asset ('imagenes/manzana_card.jpg')}}" class="card-img" alt="...">
    <div class="card-img-overlay">
      {{-- Contenedor para centrar el contenido --}}
        <div class="container text-center">
          {{-- Fila necesaria --}}
            <div class="row">
              
              <button type="button" class="btn btn-success form-control fs-4" data-bs-toggle="modal" data-bs-target="#modalAgg">
                  + Agregar municipio
              </button>
          
              {{-- Tabla que muestra los municipios --}}
                <table class="table mt-5 border">
                  <thead>
                    {{-- Datos necesarios --}}
                    <tr>
                      <th scope="col">Código</th>
                      <th scope="col">Nombre</th>
                      <th scope="col"> </th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- Validaciones --}}
                    @foreach ($municipios as $municipio)
                      <tr>
                        <th scope="row">{{ $municipio->codigo }}</th>
                        <td>{{ $municipio->nombre }}</td>
                        {{-- Boton para editar --}}
                        <td>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEdit">
                            Editar municipio
                          </button>
                          {{-- Boton para eliminar --}}
                          <a href="{{route('eliminar')}}" class="btn btn-danger">Eliminar</a>
                        </td>
              
                      </tr>
                    @endforeach 
                  </tbody>
                </table>
            </div>   
        </div>
        {{-- Boton para devolver al menu --}}
        <div>
            <a href="{{route('home')}}" class=" boton btn btn-primary"> Atras </a>
        </div>
    </div>

</div>       
{{-- CONTENEDOR DEL CRUD --}}


@endsection