<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
// Ruta para mostrar el formulario
Route::get('/unete', function () {
    return view('unete');
});

// Ruta para procesar el formulario
Route::post('/unete/enviar', function (Illuminate\Http\Request $request) {
    // Obtener los datos del formulario
    $nombre = $request->input('nombre');
    $usuario = $request->input('usuario');
    
    // Aquí podrías hacer algo con los datos, como guardarlos en la base de datos

    return redirect('/unete')->with('status', 'Mensaje enviado');
});