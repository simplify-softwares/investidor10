<?php

namespace App\Http\Actions\Admin\Noticias;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\UseCases\Categorias\ListarCategoriasUseCase;

class CadastrarNoticiaAction extends Controller
{
    public function __invoke(ListarCategoriasUseCase $listarCategoriasUseCase)
    {
        $categorias = $listarCategoriasUseCase->handle()->pluck('name', 'id');
        $noticia = new News();
        return view("admin.noticias.cadastrar", ['categorias' => $categorias, 'noticia' => $noticia]);
    }
}
