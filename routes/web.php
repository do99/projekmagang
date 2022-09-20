<?php

use App\Http\Controllers\TabelController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dtable', function() {
//     return view('dtable');
// });
Route::controller(TabelController::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/create', 'tambah');
    Route::post('/create', 'create');
    Route::get('/edit/{project_id}', 'edit');
    Route::put('edit/update/{project_id}', 'update');
});
// Route::get('/create', function () {
//     return view('Create');
// });
// Route::resource('controller', TabelController::class);
// Route::get('/', [TabelController::class, 'index']);