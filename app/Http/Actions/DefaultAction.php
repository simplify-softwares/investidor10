<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\UseCases\Categorias\ListarCategoriasUseCase;
use App\UseCases\Noticias\ListarNoticiasUseCase;
use Illuminate\View\View;

class DefaultAction extends Controller
{

    public function __invoke(ListarNoticiasUseCase $listarNoticiasUseCase, ListarCategoriasUseCase $listarCategoriasUseCase): View
    {
        $noticias = $listarNoticiasUseCase->handle();
        $categorias = $listarCategoriasUseCase->handle();
        return view("default.home", ['noticias' => $noticias, 'categorias' => $categorias]);
    }

}
