<?php

use App\Http\Actions\Admin\DashboardAction;
use App\Http\Actions\Admin\Noticias\{
    CadastrarNoticiaAction,
    ListarNoticiasAction,
    VisualizarNoticiaAction
};

use App\Http\Actions\DefaultAction;
use App\Http\Actions\Noticias\VisualizarNoticiaAction as SiteVisualizarNoticiaAction;
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
Route::get('/visualizar', SiteVisualizarNoticiaAction::class)->name("visualizar.noticia");

Route::prefix("painel")->group(function () {
    Route::get("/dashboard", DashboardAction::class)->name("dashboard");
    Route::prefix("news")->group(function () {
        Route::get("/", ListarNoticiasAction::class)->name('news.listar');
        Route::match(['GET', 'POST'], "/cadastrar", CadastrarNoticiaAction::class)->name('news.cadastrar');
        Route::match(['GET', 'POST'], "/editar/{noticia}", CadastrarNoticiaAction::class)->name('news.editar');

        Route::get("/visualizar/{noticia}", VisualizarNoticiaAction::class)->name("news.visualizar");

    });
});
