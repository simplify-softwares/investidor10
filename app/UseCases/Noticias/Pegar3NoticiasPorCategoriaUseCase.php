<?php

namespace App\UseCases\Noticias;

use App\Http\Controllers\Controller;
use App\Repositories\Noticias\NewsRepositoryInterface;

class Pegar3NoticiasPorCategoriaUseCase extends Controller
{
    private NewsRepositoryInterface $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function handle(int $category_id, int $id_noticia, int $qtde = 3)
    {
        return $this->newsRepository->pegarNoticiasPorCategoria($category_id, $id_noticia, $qtde);
    }
}
