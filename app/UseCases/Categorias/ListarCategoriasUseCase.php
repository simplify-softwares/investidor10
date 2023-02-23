<?php

namespace App\UseCases\Categorias;

use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ListarCategoriasUseCase
{
    private CategoryRepositoryInterface $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function handle(): Collection
    {
        return $this->categoryRepository->listarTodas();
    }
}
