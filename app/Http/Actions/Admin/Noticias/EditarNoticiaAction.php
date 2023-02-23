<?php

namespace App\Http\Actions\Admin\Noticias;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\UseCases\Categorias\ListarCategoriasUseCase;
use App\UseCases\Noticias\PegarNoticiaPorIdUseCase;

class EditarNoticiaAction extends Controller
{
    public function __invoke(
        ListarCategoriasUseCase $listarCategoriasUseCase,
        PegarNoticiaPorIdUseCase $pegarNoticiaPorIdUseCase,
        int $id)
    {
        $categorias = $listarCategoriasUseCase->handle()->pluck('name', 'id');
        $noticia = $pegarNoticiaPorIdUseCase->handle($id);
        return view("admin.noticias.editar", ['categorias' => $categorias, 'noticia' => $noticia]);
    }
}
