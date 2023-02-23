<?php

namespace App\UseCases\Noticias;

use App\Models\News;
use App\Repositories\Noticias\NewsRepositoryInterface;

class SalvarNoticiaUseCase
{
    private NewsRepositoryInterface $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function handle(array $noticia): bool
    {
        $slugNoticiaExiste = $this->newsRepository->pegarNoticiaPorSlug($noticia['slug_title']);
        if ($slugNoticiaExiste) {
            throw new \DomainException("Parece que uma notícia com esse titulo já está cadastrada!", 409);
        }

        $noticia = $this->newsRepository->salvar($noticia);

        if (!$noticia) {
            throw new \DomainException("A notícia não pode ser salva!", 500);
        }
        return $noticia;

    }
}
