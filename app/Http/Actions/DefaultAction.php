<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\UseCases\Categorias\ListarCategoriasUseCase;
use App\UseCases\Noticias\ListarNoticiasUseCase;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DefaultAction extends Controller
{

    public function __invoke(Request $request, ListarNoticiasUseCase $listarNoticiasUseCase, ListarCategoriasUseCase $listarCategoriasUseCase): View
    {
        $busca = $request->get('busca');
        $categoria = $request->get('categoria');
        $page = $request->get('page');

        $noticias = $listarNoticiasUseCase->handle($busca, $categoria)->simplePaginate(9);
        $noticias->appends(['busca' => $busca]);
        $noticias->appends(['categoria' => $categoria]);

        $categorias = $listarCategoriasUseCase->handle();
        return view("default.home", [
            'noticias' => $noticias,
            'categorias' => $categorias,
            'busca' => $busca,
            'categoria' => $categoria,
            'page' => $page
        ]);
    }

}
