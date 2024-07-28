<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

// Route::get('/proyecto', [ProyectoController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proyecto', function () {
    $controller = new ProyectoController();
    $proyectos = $controller->getProyectos();
    return view('ProyectoView', ['proyectos' => $proyectos]);
});

Route::post('/proyecto', [ProyectoController::class, 'store']);

Route::get('/proyecto/store/{id}/{nombre}/{fecha}/{estado}/{responsable}/{monto}', function ($id, $nombre, $fecha, $estado, $responsable, $monto) {
    $controller = new ProyectoController();
    $nuevoProyecto = [
        'id' => $id,
        'nombre' => $nombre,
        'fecha' => $fecha,
        'estado'=> $estado,
        'responsable' => $responsable,
        'monto' => $monto,
    ];
    return $controller->store($nuevoProyecto);
});


Route::get('/proyecto/update/{id}/{nombre}/{fecha}/{estado}/{responsable}/{monto}', function ($id, $nombre, $fecha, $estado, $responsable, $monto) {
    $controller = new ProyectoController();
    $updateProyecto = [
        'id' => $id,
        'nombre' => $nombre,
        'fecha' => $fecha,
        'estado' => $estado,
        'responsable' => $responsable,
        'monto' => $monto,
    ];
    return $controller->update($updateProyecto);
});



Route::get('/proyecto/delete/{id}', function ($id) {
    $controller = new ProyectoController();
    return $controller->delete($id);
});

Route::get('/proyecto/{_id}', function ($_id) {
    return "El id es : {$_id} ";
});

