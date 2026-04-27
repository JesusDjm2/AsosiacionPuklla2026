<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', fn () => view('nosotros'))->name('nosotros');
Route::get('/contacto', fn () => view('contacto'))->name('contacto');
Route::get('/donaciones', fn () => view('donaciones'))->name('donaciones');
Route::get('/noticias', fn () => view('noticias'))->name('noticias');
Route::get('/publicaciones', fn () => view('publicaciones'))->name('publicaciones');

Route::get('/colegio', fn () => view('programas.colegio'))->name('colegio');
Route::get('/escuela', fn () => view('programas.escuela'))->name('escuela');
Route::get('/radio', fn () => view('programas.radio'))->name('radio');
Route::get('/sipas-wayna', fn () => view('programas.sipas-wayna'))->name('sipas-wayna');
Route::get('/kawsay', fn () => view('programas.kawsay'))->name('kawsay');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('panel')->name('panel.')->group(function () {
        Route::get('/colegio', fn () => view('panel.program', [
            'title' => 'Colegio',
            'description' => 'Gestión del programa Colegio (contenidos y CRUD próximamente).',
        ]))->middleware('role:colegio')->name('colegio');

        Route::get('/escuela', fn () => view('panel.program', [
            'title' => 'Escuela superior',
            'description' => 'Gestión de la escuela superior (contenidos y CRUD próximamente).',
        ]))->middleware('role:escuela')->name('escuela');

        Route::get('/sipas-wayna', fn () => view('panel.program', [
            'title' => 'Sipas Wayna',
            'description' => 'Gestión del programa Sipas Wayna (contenidos y CRUD próximamente).',
        ]))->middleware('role:sipas_wayna')->name('sipas-wayna');

        Route::get('/radio', fn () => view('panel.program', [
            'title' => 'Radio',
            'description' => 'Gestión del programa Radio (contenidos y CRUD próximamente).',
        ]))->middleware('role:radio')->name('radio');

        Route::get('/kawsay', fn () => view('panel.program', [
            'title' => 'Kawsay',
            'description' => 'Gestión del programa Kawsay (contenidos y CRUD próximamente).',
        ]))->middleware('role:kawsay')->name('kawsay');
    });

    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', UserController::class)->except(['show']);
    });
});
