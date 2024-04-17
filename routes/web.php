<?php

use App\Livewire\AddCar;
use App\Livewire\CarList;
use App\Livewire\TestPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/Page', TestPage::class);
Route::get('/Cars', CarList::class);
Route::get('/add/new', AddCar::class);
