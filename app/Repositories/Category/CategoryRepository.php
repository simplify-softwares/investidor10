<?php

namespace App\Repositories\Category;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function listarTodas(): Collection
    {
        return Category::orderBy("name")->get();
    }

    public function totalCategorias(): int
    {
        return Category::count();
    }
}
