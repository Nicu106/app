<?php

use App\Http\Controllers\ChatBotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/chat', function () {
    return view('chat',);
})->name('chat');

Route::get('/dm-chat', function () {
    return view('dm-chat');
})->name('dm-chat');


Route::get('/booked', function () {
    return view('booked');
})->name('booked');



Route::post('/chat-bot', [ChatBotController::class, 'processMessage']);

