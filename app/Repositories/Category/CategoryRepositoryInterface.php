<?php

namespace App\Repositories\Category;

use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface
{
    public function listarTodas(): Collection;
    public function totalCategorias(): int;
}
