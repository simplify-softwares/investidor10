<?php

use App\Http\Actions\DefaultAction;
use App\Http\Actions\Noticias\VisualizarNoticiaAction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', DefaultAction::class)->name("home");
Route::get('/visualizar', VisualizarNoticiaAction::class)->name("visualizar.noticia");
