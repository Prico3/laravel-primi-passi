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
    return view('home');
});

Route::get('/giochips4', function () {

    $data = [
        "pageTitle" => "Gli imperdibili PS",
        "description" => "Qui una lista degli imperdibili per ps4 e ps5",
        "games" => [
            "The Last of Us",
            "Ratchet e Clank",
            "God of War"
        ],
    ];
    return view('giochips4', $data);
})->name('imperdibiliPS');

Route::get('/giochiXBOX', function () {

    $data = [
        "pageTitle" => "Gli imperdibili XBOX",
        "description" => "Qui una lista degli imperdibili per XBOX",
        "games" => [
            "HALO",
            "Gears of War",
            "Fable"
        ],
    ];
    return view('giochixbox', $data);
})->name('imperdibiliXBOX');
