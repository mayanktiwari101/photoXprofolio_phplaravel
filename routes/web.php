<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Auth\AuthenicatedSessionController;

Route::get('/', function () {

    return Inertia::render('Home', [
        'message' => 'Vue, Inertia and Bootstrap are working!'
    ]);

});

Route::get('/login', [AuthenicatedSessionController::class, 'create']);
Route::get('/home', function () {
    return Inertia::render('Home/Home');
});