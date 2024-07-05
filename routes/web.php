<?php

use App\Models\User;

use App\Livewire\Vhk;
use Spatie\Valuestore\Valuestore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
if (User::get()->count() > 0) {
    Auth::login(User::find(2));
}

//Route::get('/vhk', Vhk::class)->name('vhk');
//dd( app(GeneralSettings::class)->site_name);