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
                  <th scope="col">Descripción</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Establecimiento</th>

                  {{-- Boton para llevar a la vista de agregar  --}}
                  <th scope="col"><a href="{{ route('vistaAggServ') }}" class="btn btn-success ">+ Agregar</a></th>
                </tr>
              </thead>
              
              {{-- Validaciones --}}
              <tbody>
                @foreach ($servicios as $servicio)
                  <tr>
                    <th scope="row">{{ $servicio->codigo }}</th>
                    <th>{{ $servicio->nombre }}</th>
                    <th>{{ $servicio->descripcion }}</th>
                    <th>{{ $servicio->fk_cod_categoria }}</th>
                    <th>{{ $servicio->fk_cod_establecimiento }}</th>
                    
                    {{-- Crud --}}
                    <td>
                      {{-- Boton para editar y su ruta--}}
                      <a href="{{ route('vistaEditServ', $servicio->codigo) }}" class="btn btn-primary">Editar</a>
                      
                      {{-- Boton para eliminar y su ruta--}}
                      <a href="{{ route('eliminarServ', $servicio->codigo) }}" class="btn btn-danger">Eliminar</a>
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