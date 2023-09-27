@extends('layouts.app')

@section('content')
<main class="main_menu bg-dark">
    <div class="container">
        <div class="row">
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    <p class="text-white text-md-center">Municipios</p>
                    <img class="img-thumbnail imagenes_menu rounded mx-auto d-block " src="{{asset('imagenes/municipios.jpg')}}" alt="">
                    <a href="{{route('municipios')}}" class=" boton btn btn-primary"> ver más...</a>
                </div>
            </div>
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    <p class="text-white text-md-center">Manzanas</p>
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/manzana_card.jpg')}}" alt="">
                    <a href="{{route('manzana')}}" class=" boton btn btn-primary"> ver más...</a>
                </div>
            </div>
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    <p class="text-white text-md-center">Servicios</p>
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/servicios.jpg')}}" alt="">
                    <a href="{{route('servicios')}}" class=" boton btn btn-primary"> ver más...</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" columnas col-12 col-md-4 border "> 
                <div class="container_title">
                    <p class="text-white text-md-center">Establecimientos</p>
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/establecimientos.jpg')}}" alt="">
                    <a href="{{route('establecimientos')}}" class=" boton btn btn-primary"> ver más...</a>
                </div>
            </div>
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    <p class="text-white text-md-center">Mujeres</p>
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/mujeres.jpg')}}" alt="">
                    <a href="{{route('mujeres')}}" class=" boton btn btn-primary"> ver más...</a>
                </div>
            </div>
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    <p class="text-white text-md-center">Agenda</p>
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block text-center" src="{{asset('imagenes/agenda.jpg')}}" alt="">
                    <a href="{{route('agenda')}}" class=" boton btn btn-primary"> ver más...</a>
                </div>
            </div>
        </div>
    </div>
    
</main>


{{-- @foreach ($users as $user)
        <li>{{ $user->name }}</li>
@endforeach --}}

{{-- @foreach ($manzanas as $manzana)
        <li>{{ $manzana->nombre }}</li>
@endforeach --}}

@endsection
