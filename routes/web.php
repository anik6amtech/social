<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/google', function () {
    return Socialite::driver('google')->redirect();
});
Route::get('/callback', function () {
    $user = Socialite::driver('google')->user();
    dd($user);
});
