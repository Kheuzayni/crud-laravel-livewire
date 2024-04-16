<?php

use App\Livewire\CartList;
use App\Livewire\TestPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/Page', TestPage::class);
Route::get('/Cars', CartList::class);
