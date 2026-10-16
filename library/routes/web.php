<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Livewire\HomeComponent;
use App\Livewire\RegisterComponent;
use App\Livewire\LoginComponent;
use App\Livewire\DashboardComponent;
use App\Livewire\BookComponent;
use App\Livewire\ViewComponent;



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', HomeComponent::class);
Route::get('register', RegisterComponent::class);
Route::get('login', LoginComponent::class)->name('login');

Route::middleware(['auth'])->group(function (){
Route::get('dashboard', DashboardComponent::class);
Route::get('bookshop', BookComponent::class);
Route::get('viewshop', viewComponent::class);

});



