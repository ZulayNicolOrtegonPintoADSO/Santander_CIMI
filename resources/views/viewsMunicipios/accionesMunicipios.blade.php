@extends('layouts.app')

@section('content')
{{-- Contenedor de la vista de municipios --}}
<div class="card text-bg-dark">
  <img src="{{asset ('imagenes/manzana_card.jpg')}}" class="card-img" alt="...">
  <div class="card-img-overlay">

    {{-- Contenedor para que el contenido este centrado --}}
    <div class="container text-center ">
      {{-- Fila necesaria --}}
      <div class="row">

          {{-- Tabla que muestra los municipios --}}
          <table class="table table-dark mt-5">
              <thead>
                {{-- Campos requeridos --}}
                <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Nombre</th>
                  {{-- Boton para llevar a la vista de agregar municipio --}}
                  <th scope="col"><a href="{{ route('vistaAgg') }}" class="btn btn-success ">+ Agregar Municipio</a></th>
                </tr>
              </thead>
              
              {{-- Validaciones --}}
              <tbody>
                @foreach ($municipios as $municipio)
                  <tr>
                    <th scope="row">{{ $municipio->codigo }}</th>
                    <td>{{ $municipio->nombre }}</td>
                    
                    {{-- Crud --}}
                    <td>
                      {{-- Boton para editar y su ruta--}}
                      <a href="{{ route('vistaEdit', $municipio->codigo) }}" class="btn btn-primary">Editar</a>
                      
                      {{-- Boton para eliminar y su ruta--}}
                      <a href="{{ route('eliminar', $municipio->codigo) }}" class="btn btn-danger">Eliminar</a>
      
                    </td>
          
                  </tr>
                @endforeach 
              </tbody>
          </table>
      </div>
    </div>
    {{-- Boton para llevar de nuevo al menu --}}
    <div>
      <a href="{{route('home')}}" class=" boton btn btn-primary"> Atras </a>
    </div>
    
  </div>
</div>

@endsection