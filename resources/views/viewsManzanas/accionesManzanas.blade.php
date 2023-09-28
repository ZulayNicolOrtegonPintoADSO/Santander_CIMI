@extends('layouts.app')

@section('content')
{{-- Contenedor --}}
<div class="card text-bg-dark">
  {{-- Imagen de fondo --}}
  <img src="{{asset ('imagenes/manzana_card.jpg')}}" class="card-img" alt="...">
  <div class="card-img-overlay">

    {{-- Contenedor del contenido para centrarlo todo --}}
    <div class="container text-center ">
      <div class="row">

          {{-- Tabla que muestra las manzanas --}}
          <table class="table table-dark mt-5">
            {{-- Información que requerimos  --}}
              <thead>
                <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Localidad</th>
                  <th scope="col">Direccion</th>
                  <th scope="col">Municipio</th>
                  {{-- Ruta para enviar a la vista de agregar --}}
                  <th scope="col"><a href="{{ route('vistaAggManz') }}" class="btn btn-success ">+ Agregar</a></th>
                </tr>
              </thead>
              {{-- Impresion de tabla manzanas --}}
              <tbody>
                @foreach ($manzanas as $manzana)
                  <tr>
                    <th scope="row">{{ $manzana->codigo }}</th>
                    <td>{{ $manzana->nombre }}</td>
                    <td>{{ $manzana->localidad }}</td>
                    <td>{{ $manzana->direccion }}</td>
                    <td>{{ $manzana->fk_cod_municipio }}</td>
                    
                    {{-- Crud --}}
                    <td>

                      
                      {{-- Boton y ruta para editar --}}
                      <a href="{{ route('vistaEditManz', $manzana->codigo) }}" class="btn btn-primary">Editar</a>
                      {{-- Boton y ruta para eliminar --}}
                      <a href="{{ route('eliminarManz', $manzana->codigo) }}" class="btn btn-danger">Eliminar</a>
      
                    </td>
          
                  </tr>
                @endforeach 

              </tbody>
          </table>
      </div>
    </div>

    {{-- Botón que abre la vista del mapa de la manzana --}}
    <a class="mapa" href="{{route('vistaMapa')}}">¿Quieres ver la manzana en mapa?</a>

    {{-- Boton para dirigir a la vista de menu --}}
    <div>
      <a href="{{route('home')}}" class=" boton btn btn-primary"> Atras </a>
    </div>
    
  </div>
</div>

@endsection