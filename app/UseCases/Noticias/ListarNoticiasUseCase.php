<?php

namespace App\UseCases\Noticias;

use App\Repositories\Noticias\NewsRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

class ListarNoticiasUseCase
{
    private NewsRepositoryInterface $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function handle(string $busca = null, int $category = null): Builder
    {
        return $this->newsRepository->listarTodas($busca, $category);
    }
}
