<?php

namespace App\UseCases\Noticias;

use App\Models\News;
use App\Repositories\Noticias\NewsRepositoryInterface;

class PegarNoticiaPorIdUseCase
{

    private NewsRepositoryInterface $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function handle(int $id): News
    {
        $noticia = $this->newsRepository->pegarNoticiaPorId($id);

        if (empty($noticia)) {
            throw new \DomainException("Não foi encontrada nenhuma notícia com essa identificação", 400);
        }

        return $noticia;
    }

}
