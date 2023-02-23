<?php

namespace App\Repositories\Noticias;

use App\Models\News;
use Illuminate\Pagination\LengthAwarePaginator;

class NewsRepository implements NewsRepositoryInterface
{
    public function pegarNoticiaPorId(int $id): ?News
    {
        return News::find($id);
    }

    public function listarTodas(): ?LengthAwarePaginator
    {
        return News::paginate();
    }
}
