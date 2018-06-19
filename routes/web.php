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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/usuarios", function () {
    return "usuarios";
});

// como el paramtro id es dinamico podria ser numerico o cadena y como coincide en primera instancia
// se tomaria esta url como base, para solucionar eso le diremos que el ID es numerico
Route::get("/usuarios/{id}", function ($id) {
    return "Mostrando detalle del usuario {$id}";
})->where("id", "[0-9]+");

Route::get("/usuarios/nuevo", function () {
    return "Crear nuevo usuario";
});

// cuando contamos con varios paramtros y queremos que alguno de ellos sea opcional lo que hacemos
// es agregar el signo ?
Route::get("/usuarios/{name}/{nickname?}", function ($name, $nickname = null) {
    if ($nickname) {
        return "Hola {$name},  tu apodo es {$nickname}";
    } else {
        return "Hola {$name}, no tienes apodo";
    }

});