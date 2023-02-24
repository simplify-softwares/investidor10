<?php

use App\Http\Actions\Admin\DashboardAction;
use App\Http\Actions\Admin\Login\AutenticarLoginAction;
use App\Http\Actions\Admin\Login\LogoutAction;
use App\Http\Actions\Admin\Login\TelaLoginAction;
use App\Http\Actions\Noticias\NoticiasPorCategoriaAction;
use App\Http\Actions\Admin\Noticias\{
    AtualizarNoticiaAction,
    CadastrarNoticiaAction,
    ExcluirNoticiaAction,
    ListarNoticiasAction,
    SalvarNoticiaAction,
    VisualizarNoticiaAction,
    EditarNoticiaAction
};

use App\Http\Actions\DefaultAction;
use App\Http\Actions\Noticias\VisualizarNoticiaAction as SiteVisualizarNoticiaAction;
use Illuminate\Support\Facades\Route;

Route::get('/', DefaultAction::class)->name("home");
Route::get('/{year}/{month}/{slug_category}/{slug_news}', SiteVisualizarNoticiaAction::class)->name("visualizar.noticia")
    ->where(['year' => '[0-9]+', 'month' => '[0-9]+']);
Route::get("/noticias/categoria/{slug_category}", NoticiasPorCategoriaAction::class)->name('noticias.categorias');

Route::prefix("painel")->group(function () {
    Route::middleware('auth')->group(function () {

        Route::get('/', function () {
            return redirect(route("dashboard"));
        });

        Route::get("/dashboard", DashboardAction::class)->name("dashboard");
        Route::prefix("news")->group(function () {
            Route::get("/", ListarNoticiasAction::class)->name('news.listar');

            Route::get("/cadastrar", CadastrarNoticiaAction::class)->name('news.cadastrar');
            Route::post("/salvar", SalvarNoticiaAction::class)->name("news.salvar");

            Route::get("/editar/{id}", EditarNoticiaAction::class)->name('news.editar');
            Route::post("/atualizar/{id}", AtualizarNoticiaAction::class)->name('news.atualizar');

            Route::get("/visualizar/{id}", VisualizarNoticiaAction::class)->name("news.visualizar");

            Route::delete("/excluir/{id}", ExcluirNoticiaAction::class)->name("news.excluir");
        });
    });

    Route::get("login", TelaLoginAction::class)->name("login");
    Route::post("autenticar", AutenticarLoginAction::class)->name("login.autenticar");
    Route::get("logout", LogoutAction::class)->name('logout');
});
