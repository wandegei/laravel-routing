<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return ('hello from laravel');
// });

Route::get('/',function (){
    return ('hello from laravel josh');
});

Route::get('about',function (){
    return ('About Us');
});

// Route::get('details/students',function (){
//     return ('this is students ');
// });

// Route::get('details/teachers',function (){
//     return ('this is teachers ');
// });

Route::prefix('details')->group(function () {
    Route::get('students', function () {
        return 'this is students';
    });

    Route::get('teachers', function () {
        return 'this is teachers';
    });
});
