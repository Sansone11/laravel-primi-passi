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
    $newtitle =[
       'benvenuto'=> 'Hello World',
        'lista'=>[ 
            'crea una lista',
            'vai su home.blade',
            'cicla con un foreach',
            'stampa la variabile',
        ]
    ];
    return view('home',$newtitle);
});
