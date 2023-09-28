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
            <div class="question_servicios">
                Nuestros servicios estan a la puerta de tu casa, no esperes más para utilizarlos
                <br>Te esperamos!
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