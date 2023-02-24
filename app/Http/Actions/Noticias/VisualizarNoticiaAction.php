<?php

namespace App\Http\Actions\Noticias;

use App\UseCases\Noticias\Pegar3NoticiasPorCategoriaUseCase;
use App\UseCases\Noticias\PegarNoticiaPorSlugUseCase;

class VisualizarNoticiaAction extends \App\Http\Controllers\Controller
{

    public function __invoke(
        PegarNoticiaPorSlugUseCase $pegarNoticiaPorSlugUseCase,
        Pegar3NoticiasPorCategoriaUseCase $pegar3NoticiasPorCategoriaUseCase,
        int $year, int $month, string $slug_category, string $slug_news)
    {
        $noticia = $pegarNoticiaPorSlugUseCase->handle($slug_news);
        $noticiasRelacionadas = $pegar3NoticiasPorCategoriaUseCase->handle($noticia->category_id, $noticia->id);
        return view("noticias.visualizar", ['noticia' => $noticia, 'noticias' => $noticiasRelacionadas]);
    }

}
