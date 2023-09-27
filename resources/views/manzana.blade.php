@extends('layouts.app')

@section('content')
<div class="container">
    <div class="div_imagen">
        <div class="texto_sobre">
            <img src="{{asset ('imagenes/museo.jpg')}}" class="imagen_modal" alt="...">
            <h1>Museum of the city of New York</h1>
            El Museo de la Ciudad de Nueva York (MCNY) es un museo de historia y arte ubicado en Manhattan, Nueva York, el cual fue fundado por Henry Collins Brown,1​2​ en 1923 para preservar y presentar la historia de la ciudad de Nueva York y su gente. Está ubicado en el número 1220-1227 de la Quinta Avenida, entre las calles East 103rd y 104th, frente a Central Park en el Upper East Side de Manhattan, en el extremo norte de la sección Milla de los Museos de la Quinta Avenida.
        </div>
    </div>
    <iframe class="desvanecer" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.16459582048!2d-74.05163266273519!3d40.759162230295374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20Nueva%20York%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sco!4v1695852423782!5m2!1ses-419!2sco" width="1000" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div>
        <a href="{{route('home')}}" class=" boton btn btn-primary"> Atras </a>
    </div>
</div>

@endsection