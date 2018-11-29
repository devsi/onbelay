<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', IndexController::class."@show")->name('home');

/** Auth */
Route::get('/register', Auth\RegisterController::class.'@show')->name('auth.register');
Route::post('/register', Auth\RegisterController::class.'@register')->name('auth.register');
Route::get('/login', Auth\LoginController::class."@show")->name('auth.login');
Route::post('/login', Auth\LoginController::class."@login")->name('auth.login');
Route::post('/logout', Auth\LoginController::class."@logout")->name('auth.logout');


/** User */
Route::middleware(['auth'])->group(function () {

    Route::get('/profile', User\ProfileController::class."@show")->name('user.profile');
    Route::get('/partner-request', User\PartnerController::class."@show")->name('user.partner-request');
    Route::post('/partner-request', User\PartnerController::class."@submit")->name('user.partner-request');

});
