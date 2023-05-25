<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CPUController;
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

Route::get('/admin',[CPUController::class, 'admin']);

Route::post('/admin/add/cpu', [CPUController::class, 'cpu_add']);
Route::post('/admin/add/motherboard', [CPUController::class, 'motherboard_add']);
Route::post('/admin/add/compatibility', [CPUController::class, 'compatibility_add']);

Route::get('/admin/delete/cpu/{id}', [CPUController::class, 'cpu_delete'])->name('cpu.delete');
Route::get('/admin/delete/motherboard/{id}', [CPUController::class, 'motherboard_delete'])->name('motherboard.delete');
Route::get('/admin/delete/compatibility/{id}', [CPUController::class, 'compatibility_delete'])->name('compatibility.delete');

Route::get('/admin/update/cpu/{id}', [CPUController::class, 'cpu_form'])->name('cpu.form');
Route::get('/admin/update/motherboard/{id}', [CPUController::class, 'motherboard_form'])->name('motherboard.form');
Route::get('/admin/update/compatibility/{id}', [CPUController::class, 'compatibility_form'])->name('compatibility.form');

Route::post('/admin/update/cpu/{id}', [CPUController::class, 'cpu_update'])->name('cpu.update');
Route::post('/admin/update/motherboard/{id}', [CPUController::class, 'motherboard_update'])->name('motherboard.update');
Route::post('/admin/update/compatibility/{id}', [CPUController::class, 'compatibility_update'])->name('compatibility.update');

Route::get('/cpu/{id}', [CPUController::class, 'cpu_search'])->name('cpu.search');
Route::get('/motherboard/{id}', [CPUController::class, 'motherboard_search'])->name('motherboard.search');

Route::get('/', [CPUController::class, 'main']);