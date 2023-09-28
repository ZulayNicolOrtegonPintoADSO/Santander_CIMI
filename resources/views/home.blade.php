@extends('layouts.app')

@section('content')
{{-- Para crear le fondo, contenededor y filas --}}
<main class="main_menu bg-dark">
    <div class="container">
        <div class="row">

            {{-- Contenedor de municipios --}}
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    {{-- Tiutlo --}}
                    <p class="text-white text-md-center">Municipios</p>
                    {{-- Imagen --}}
                    <img class="img-thumbnail imagenes_menu rounded mx-auto d-block " src="{{asset('imagenes/municipios.jpg')}}" alt="">
                    {{-- Boton para ver mas sobre esta vista --}}
                    <a href="{{route('adminMunicipios')}}" class=" boton btn btn-primary"> Ver más...</a>
                </div>
            </div>

            {{-- Contenedor de manzanas --}}
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    {{-- Titulo --}}
                    <p class="text-white text-md-center">Manzanas</p>
                    {{-- Imagen --}}
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/manzana_card.jpg')}}" alt="">
                    {{-- Boton para ver mas sobre esta vista --}}
                    <a href="{{route('adminManzanas')}}" class=" boton btn btn-primary"> Ver más...</a>
                    {{-- <button type="" class="btn btn-primary form-control mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        Editar municipio
                    </button> --}}
                </div>
            </div>


        {{-- MODAL MANZANA --}}

            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-8" id="exampleModalLabel">Manzana</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- IMAGEN DEL MODAL --}}
                        <div class="row">
                            <div class="col-6">
                                <div>
                                    <img src="{{asset ('imagenes/manzana_modal.avif')}}" class="imagen_modal" alt="...">
                                </div>
                            </div>
                            {{-- FORMULARIO PARA LOS DATOS DEL MUNICPIO --}}
                            <div class="col-6">
                                <div class="formulario">
                                    <label for="codigo" class="col-md-8 col-form-label ">{{ __('Codigo:') }}</label>
                                    <input id="codigo" type="number" class="form-control"  autofocus>
                                    <label for="nombre" class="col-md-8 col-form-label ">{{ __('Nombre:') }}</label>
                                    <input id="nombre" type="text" class="form-control"  autofocus>
                                    <label for="codigo" class="col-md-8 col-form-label ">{{ __('Localidad:') }}</label>
                                    <input id="codigo" type="text" class="form-control"  autofocus>
                                    <label for="nombre" class="col-md-8 col-form-label ">{{ __('Dirección:') }}</label>
                                    <input id="nombre" type="text" class="form-control"  autofocus>
                                    <label for="codigo" class="col-md-8 col-form-label ">{{ __('Municipio:') }}</label>
                                    <input id="codigo" type="text" class="form-control"  autofocus>
                                </div>
                            </div>
                        </div>
                        
                        {{-- ENLACE HACIA LA VISTA DE LA MANZANA --}}

                        <a href="#">¿Te gustaria permitirnos saber tu ubicación?</a>
                    </div>
                    {{-- BOTÓN DE CERRAR --}}
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
            </div>

            {{-- Contenedor de Servicios --}}
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    {{-- Titulo --}}
                    <p class="text-white text-md-center">Servicios</p>
                    {{-- Imagen --}}
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/servicios.jpg')}}" alt="">
                    {{-- Boton para ver mas sobre esta vista --}}
                    <a href="#" class=" boton btn btn-primary"> Ver más...</a>
                </div>
            </div>
        </div>
        {{-- Sguiente fila para los contenedores --}}
        <div class="row">
            {{-- Contenedor de Estaablecimientos  --}}
            <div class=" columnas col-12 col-md-4 border "> 
                <div class="container_title">
                    {{-- Titulo --}}
                    <p class="text-white text-md-center">Establecimientos</p>
                    {{-- Imagen --}}
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/establecimientos.webp')}}" alt="">
                    {{-- Boton para ver mas sobre esta vista --}}
                    <a href="#" class=" boton btn btn-primary"> Ver más...</a>
                </div>
            </div>
            {{-- Contenedor de Mujeres --}}
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    {{-- Titulo --}}
                    <p class="text-white text-md-center">Mujeres</p>
                    {{-- Imagen --}}
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block" src="{{asset('imagenes/mujeres.jpg')}}" alt="">
                    {{-- Boton para ver mas sobre esta vista --}}
                    <a href="#" class=" boton btn btn-primary"> Ver más...</a>
                </div>
            </div>
            {{-- Contenedor de Agenda --}}
            <div class=" columnas col-12 col-md-4 border"> 
                <div class="container_title">
                    {{-- Titulo --}}
                    <p class="text-white text-md-center">Agenda</p>
                    {{-- Imagen --}}
                    <img class=" img-thumbnail imagenes_menu rounded mx-auto d-block text-center" src="{{asset('imagenes/agenda.jpg')}}" alt="">
                    {{-- Boton para ver mas sobre esta vista --}}
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