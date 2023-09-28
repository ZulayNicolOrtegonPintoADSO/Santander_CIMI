@extends('layouts.app')

@section('content')

<div class="card text-bg-dark">
    <img src="{{asset ('imagenes/actividades.jpg')}}" alt="...">
    <div class="card-img-overlay">
        <div class="container">
            <div class="sub_title">
                Servicios que te ofrecemos
            </div>
            <div class="descripcion">
                Todo esto lo tenemos para tí, en tu tiempos libres podras usar nuestros servicios a tu manera 
                <br>y la mejor parte es que no se te cobrara, ya que estos servicios son 100% gratis.
                <br>Esperamos que los uses bien y sean de tu agrado y beneficio.            </div>
            <div class="parrafo_lista">
                <div class="lista">
                    <ul>
                        <li>Estudiar</li>
                        <li>Emprender</li>
                        <li>Emplearse</li>
                        <li>Descansar</li>
                        <li>Ejercitarse</li>
                        <li>Orientación</li>
                        <li>Asesoría Jurídica</li>
                        <li>Asesoría Psicologíca</li>
                        <li>Lavanderia</li>
                    </ul>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <div class="tarjeta">
                    <h5 class="card-title">Estudiar</h5>
                    <img src="{{asset ('imagenes/card_imagen.jpg')}}" class="card_imagen" alt="...">
                    <p class="card-text">El estudio es el conjunto de técnicas y estrategias puestas en práctica por un sujeto, denominado estudiante, para incorporar conocimientos de una determinada disciplina o de las relaciones entre estos y otros conocimientos.</p>
                    <a href="#" class="codigo_serv" >#0001</a>
                </div>
              </div>
            <div class="question_servicios">
                Nuestros servicios estan a la puerta de tu casa, no esperes más para utilizarlos
                <br>Te esperamos!
            </div>
            
            <div>
                <a href="{{route('home')}}" class=" boton btn btn-primary"> Atras </a>
            </div>
        </div>
    </div>
</div>











{{-- <div class="container">
    <div class="parrafo_servicios">
        Servicios que te ofrecemos
        <div class="imagen_activiades">
            <img src="{{asset ('imagenes/actividades.jpg')}}" class="imagen_modal" alt="...">
        </div>
        <div class="descripcion">
            Todo esto lo tenemos para tí, en tu tiempos libres podras usar nuestros servicios a tu manera 
            <br>y la mejor parte es que no se te cobrara, ya que estos servicios son 100% gratis.
            <br>Esperamos que los uses bien y sean de tu agrado y beneficio.
        </div>
        <div class="lista">
            <ul>
                <li>ejercitarse</li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</div> --}}

@endsection