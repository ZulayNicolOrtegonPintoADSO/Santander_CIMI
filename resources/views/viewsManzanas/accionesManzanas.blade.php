@extends('layouts.app')

@section('content')

<div class="card text-bg-dark">
  <img src="{{asset ('imagenes/manzana_card.jpg')}}" class="card-img" alt="...">
  <div class="card-img-overlay">


    <div class="container text-center ">
      <div class="row">

          {{-- Tabla que muestra los municipios --}}
          <table class="table table-dark mt-5">
              <thead>
                <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Nombre</th>
                  <th scope="col"><a href="{{ route('vistaAgg') }}" class="btn btn-success ">+ Agregar Municipio</a></th>
                </tr>
              </thead>
      
              <tbody>
                @foreach ($municipios as $municipio)
                  <tr>
                    <th scope="row">{{ $municipio->codigo }}</th>
                    <td>{{ $municipio->nombre }}</td>
          
                    <td>
                      <a href="{{ route('vistaEdit', $municipio->codigo) }}" class="btn btn-primary">Editar</a>
      
                      <a href="{{ route('eliminar', $municipio->codigo) }}" class="btn btn-danger">Eliminar</a>
      
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