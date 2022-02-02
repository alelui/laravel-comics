<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        [
            "nome" => "Ale",
            "cognome" => "Lui"
        ],
        [
            "nome" => "Dan",
            "cognome" => "Cevi"
        ],
        [
            "nome" => "Eli",
            "cognome" => "ropa"
        ],
        [
            "nome" => "Mic",
            "cognome" => "Lui"
        ],

    ];
    return view('home', ["credentials"=>$data]);
});

Route::get('/partials/chi-siamo', function(){
    return view('chi-siamo');
});
