@extends('layouts.app')

@section('content')
<div class="card text-bg-dark">
    <img src="{{asset ('imagenes/Bienvenida.jpeg')}}" class="card-img" alt="...">
    <div class="card-img-overlay">
        <div class="container">
            <div class="sub_title">
                ¿Para que sirve?
            </div>
            <div class="title">
                Bienvenida!
            </div>
            <div class="parrafo">
                <p>Este medio esta diseñado para que mujeres agenden su día a día conforme a sus necesidades y 
                    ocupaciones, esperamos te sirva de ayuda. <br> Acuerdate que todos estos servicios son totlamente
                    gratis!
                </p>
            </div>
            <div class="question">
                ¿Qué esperas para registrarte?
            </div>
        </div>
    </div>
  </div>
@endsection
