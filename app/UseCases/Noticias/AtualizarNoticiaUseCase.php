<?php

namespace App\UseCases\Noticias;

use App\Models\News;
use App\Repositories\Noticias\NewsRepositoryInterface;

class AtualizarNoticiaUseCase
{
    private NewsRepositoryInterface $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function handle(array $noticia, int $id): bool
    {
        $slugNoticiaExiste = $this->newsRepository->pegarNoticiaPorSlug($noticia['slug_title']);

        if ($slugNoticiaExiste && $slugNoticiaExiste->id !== $id) {
            throw new \DomainException("Parece que uma notícia com esse titulo já está cadastrada!", 409);
        }

        $noticia = $this->newsRepository->atualizar($noticia, $id);

        if (!$noticia) {
            throw new \DomainException("A notícia não pode ser salva!", 500);
        }
        return $noticia;

    }
}
