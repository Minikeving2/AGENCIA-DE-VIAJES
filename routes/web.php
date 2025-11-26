<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\AgentePaqueteController;
use App\Http\Controllers\Admin\PaqueteAdminController;
use App\Http\Controllers\Admin\UserAdminController;

/*
|--------------------------------------------------------------------------
| RUTAS PÚBLICAS
|--------------------------------------------------------------------------
*/

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/paquetes', [PublicController::class, 'paquetes'])->name('paquetes');
Route::get('/paquete/{id}', [PublicController::class, 'paquete'])->name('paquete.detalle');

Route::get('/cotizar/{id}', [PublicController::class, 'cotizarForm'])->name('cotizar.form');
Route::post('/cotizar', [SolicitudController::class, 'store'])->name('cotizar.store');


/*
|--------------------------------------------------------------------------
| AUTENTICACIÓN (Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| PERFIL (Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__.'/profile.php';


/*
|--------------------------------------------------------------------------
| DASHBOARD – REDIRECCIÓN AUTOMÁTICA POR ROL
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {

    $user = auth()->user();

    if (!$user) {
        return redirect()->route('login');
    }

    return match ($user->role) {
        'admin'  => redirect()->route('admin.dashboard'),
        'agente' => redirect()->route('panel.bandeja'),
        default  => abort(403),
    };

})->middleware('auth')->name('dashboard');


/*
|--------------------------------------------------------------------------
| PANEL DEL AGENTE
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','role:agente'])
    ->prefix('panel')
    ->name('panel.')
    ->group(function () {

        // Bandeja de solicitudes
        Route::get('/bandeja', [AgenteController::class, 'bandeja'])->name('bandeja');

        // Vista de una oportunidad
        Route::get('/oportunidad/{id}', [AgenteController::class, 'oportunidad'])->name('oportunidad');

        // Acción: actualizar estado (PUT obligatorio)
        Route::put('/oportunidad/{id}/estado', [AgenteController::class,'actualizarEstado'])
            ->name('oportunidad.estado');

        // Acción: agregar nota interna (POST obligatorio)
        Route::post('/oportunidad/{id}/nota', [AgenteController::class,'agregarNota'])
            ->name('oportunidad.nota');

        // Clientes del agente
        Route::get('/clientes', [AgenteController::class, 'clientes'])->name('clientes');


        /*
        |--------------------------------------------------------------------------
        | CRUD DE PAQUETES PARA AGENTES
        |--------------------------------------------------------------------------
        */
        Route::get('/paquetes', [AgentePaqueteController::class, 'index'])->name('paquetes.index');
        Route::get('/paquetes/crear', [AgentePaqueteController::class, 'create'])->name('paquetes.create');
        Route::post('/paquetes', [AgentePaqueteController::class, 'store'])->name('paquetes.store');
        Route::get('/paquetes/{id}/editar', [AgentePaqueteController::class, 'edit'])->name('paquetes.edit');
        Route::put('/paquetes/{id}', [AgentePaqueteController::class, 'update'])->name('paquetes.update');
        Route::put('/paquetes/{id}/toggle', [AgentePaqueteController::class, 'toggle'])->name('paquetes.toggle');
    });


/*
|--------------------------------------------------------------------------
| PANEL DEL ADMINISTRADOR
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard Admin
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // CRUD de Paquetes
        Route::resource('paquetes', PaqueteAdminController::class);

        // CRUD de Usuarios
        Route::resource('usuarios', UserAdminController::class)
            ->except(['show', 'destroy']);
    });
