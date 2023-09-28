@extends('layouts.app')

@section('content')

<div class="card text-bg-dark">
  <img src="{{asset ('imagenes/manzana_card.jpg')}}" class="card-img" alt="...">
  <div class="card-img-overlay">


    <div class="container text-center ">
      <div class="row">

          {{-- Tabla que muestra las manzanas --}}
          <table class="table table-dark mt-5">
              <thead>
                <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Localidad</th>
                  <th scope="col">Direccion</th>
                  <th scope="col">Municipio</th>
                  <th scope="col"><a href="{{ route('vistaAggManz') }}" class="btn btn-success ">+ Agregar</a></th>
                </tr>
              </thead>
      
              <tbody>
                @foreach ($manzanas as $manzana)
                  <tr>
                    <th scope="row">{{ $manzana->codigo }}</th>
                    <td>{{ $manzana->nombre }}</td>
                    <td>{{ $manzana->localidad }}</td>
                    <td>{{ $manzana->direccion }}</td>
                    <td>{{ $manzana->fk_cod_municipio }}</td>
          
                    <td>

                      
                      <a href="{{ route('vistaEditManz', $manzana->codigo) }}" class="btn btn-primary">Editar</a>
                      <a href="{{ route('eliminarManz', $manzana->codigo) }}" class="btn btn-danger">Eliminar</a>
      
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

@endsection