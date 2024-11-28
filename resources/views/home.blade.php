<!-- resources/view/home.blade.php -->

@extends('layout.base')

@section('title', 'Instagram-like Posts')

@section('content')

     <div class="my-4">
        <x-instagram-post
            username="Maia Sandu"
            profile-pic="{{ asset('profile-img/maia.jpg') }}"
            post-image="{{ asset('img/car.jpg') }}"
            description="Reparam Masini"
            likes="100"
            price="200 lei/oră"
        />
    </div>
     <div class="my-4">
         <x-instagram-post
             username="Stoianoglo"
             profile-pic="{{ asset('profile-img/stoian.jpeg') }}"
             post-image="{{ asset('img/circ.jpg') }}"
             description="Noi amuzam o țarǎ întreagǎ"
             likes="1"
             price="gratis"
         />
     </div>
     <div class="my-4">
         <x-instagram-post
             username="Jon"
             profile-pic="{{ asset('profile-img/boy1.jpg') }}"
             post-image="{{ asset('img/door.jpg') }}"
             description="Eu repar uşi, am experiența, şi fac foarte profesional"
             likes="1"
             price="50 lei/oră"
         />
     </div>
     <div class="">
         <x-instagram-post
             username="Gici"
             profile-pic="{{ asset('profile-img/boy3.webp') }}"
             post-image="{{ asset('img/restaurant.jpg') }}"
             description="Eu sunt student, dar sunt disponibil pentru weekend în care pot lucra şi 18 ore"
             likes="34"
             price="400 lei"
         />
     </div>

@endsection
