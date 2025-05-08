<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello from Laravel Josh!';
});

Route::get('about-Us', function () {
    $name = "tester";
    $email = 'tester@gmail.com';
    $items = ['Laravel', 'Vue', 'Tailwind', 'Livewire', 'Vite'];
    $userStatus = 'active';
    $score = 75;

    return view('aboutus', compact('name', 'email', 'items', 'userStatus', 'score'));
});

Route::get('contact-Us', function () {
    return view('contactus');
});

Route::fallback(function () {
    return 'This page is not found. Please try again.';
});
