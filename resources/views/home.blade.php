@extends('layouts.app')

@section('content')

<main class="main_menu bg-dark">
    <div class="container">
        <div class="row">

            {{-- Contenedor de municipios --}}
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    <p class="text-white text-md-center">Municipios</p>
                    <img class="img-thumbnail imagenes_menu rounded mx-auto d-block " src="{{asset('imagenes/municipios.jpg')}}" alt="">
                    <a href="{{route('adminMunicipios')}}" class=" boton btn btn-primary"> Ver más...</a>
                </div>
            </div>

            {{-- Contenedor de manzanas --}}
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    <p class="text-white text-md-center">Manzanas</p>
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/manzana_card.jpg')}}" alt="">
                    <a href="{{route('adminManzanas')}}" class=" boton btn btn-primary"> Ver más...</a>
                </div>
            </div>


            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    <p class="text-white text-md-center">Servicios</p>
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/servicios.jpg')}}" alt="">
                    <a href="{{route('adminServicios')}}" class=" boton btn btn-primary"> Ver más...</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class=" columnas col-12 col-md-4 border "> 
                <div class="container_title">
                    <p class="text-white text-md-center">Establecimientos</p>
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/establecimientos.jpg')}}" alt="">
                    <a href="#" class=" boton btn btn-primary"> Ver más...</a>
                </div>
            </div>
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    <p class="text-white text-md-center">Mujeres</p>
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/mujeres.jpg')}}" alt="">
                    <a href="#" class=" boton btn btn-primary"> Ver más...</a>
                </div>
            </div>
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    <p class="text-white text-md-center">Agenda</p>
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block text-center" src="{{asset('imagenes/agenda.jpg')}}" alt="">
                    <a href="#" class=" boton btn btn-primary"> Ver más...</a>
                </div>
            </div>
        </div>
    </div>
    
</main>

@endsection

{{-- TAREAS: --}}
{{--  ARREGLAR DISEÑO DE AGREGAR MUNICIPIO --}}
{{--  ARREGLAR DISEÑO DE EDITAR MUNICIPIO--}}