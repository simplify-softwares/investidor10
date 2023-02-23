<?php

namespace App\UseCases;

use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Noticias\NewsRepositoryInterface;

class DashboardUseCase
{
    private NewsRepositoryInterface $newsRepository;
    private CategoryRepositoryInterface $categoryRepository;

    public function __construct(
        NewsRepositoryInterface $newsRepository,
        CategoryRepositoryInterface $categoryRepository
    )
    {

        $this->newsRepository = $newsRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function handle(): array
    {
        $totalNoticias = $this->newsRepository->totalNoticias();
        $totalNoticiasInativas = $this->newsRepository->totalNoticiasInativas();
        $totalNoticiasAtivas = $totalNoticias - $totalNoticiasInativas;
        $totalCategorias = $this->categoryRepository->totalCategorias();

        return [
            'totalNoticias' => $totalNoticias,
            'totalNoticiasInativas' => $totalNoticiasInativas,
            'totalNoticiasAtivas' => $totalNoticiasAtivas,
            'totalCategorias' => $totalCategorias
        ];
    }
}
