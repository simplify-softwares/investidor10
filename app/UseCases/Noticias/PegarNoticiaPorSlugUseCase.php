<?php

namespace App\UseCases\Noticias;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Repositories\Noticias\NewsRepositoryInterface;

class PegarNoticiaPorSlugUseCase extends Controller
{
    private NewsRepositoryInterface $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {

        $this->newsRepository = $newsRepository;
    }

    public function handle(string $slug): News
    {
        $noticia = $this->newsRepository->pegarNoticiaPorSlug($slug);

        if (empty($noticia)) {
            throw new \DomainException("Parece que essa notícia nãpo existe mais no nosso banco de dados", 400);
        }

        return $noticia;
    }
}
