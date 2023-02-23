<?php

namespace App\UseCases\Noticias;

use App\Models\News;
use App\Repositories\Noticias\NewsRepositoryInterface;

class ExcluirNoticiaUseCase
{
    private NewsRepositoryInterface $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function handle(int $id): bool
    {
        return $this->newsRepository->excluirNoticia($id);
    }
}
