<?php

namespace App\Repositories\Noticias;

use App\Models\News;
use Illuminate\Pagination\LengthAwarePaginator;

interface NewsRepositoryInterface
{
    public function pegarNoticiaPorId(int $id): ?News;
    public function listarTodas(): ?LengthAwarePaginator;
}
