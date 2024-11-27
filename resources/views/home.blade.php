<!-- resources/view/home.blade.php -->

@extends('layout.base')

@section('title', 'Instagram-like Posts')

@section('content')
    <div class="container my-4">
        <x-instagram-post
            username="Username"
            profile-pic="{{ asset('images/profile-pic.jpg') }}"
            post-image="{{ asset('images/post-image.jpg') }}"
            description="Beautiful post description goes here. #hashtags"
            likes="500"
            price="99.99"
        />
    </div>
    <div class="container my-4">
        <x-instagram-post
            username="Username"
            profile-pic="{{ asset('images/profile-pic.jpg') }}"
            post-image="{{ asset('images/post-image.jpg') }}"
            description="Beautiful post description goes here. #hashtags"
            likes="500"
            price="99.99"
        />
    </div>
@endsection
