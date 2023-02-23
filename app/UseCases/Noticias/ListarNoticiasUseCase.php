<?php

namespace App\UseCases\Noticias;

use App\Repositories\Noticias\NewsRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class ListarNoticiasUseCase
{
    private NewsRepositoryInterface $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function handle(): LengthAwarePaginator
    {
        return $this->newsRepository->listarTodas();
    }
}
