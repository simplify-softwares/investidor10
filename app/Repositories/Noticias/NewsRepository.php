<?php

namespace App\Repositories\Noticias;

use App\Models\News;
use Illuminate\Database\Eloquent\Collection;
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

    public function salvar(array $noticia): bool
    {
        $noticia = new News($noticia);
        return $noticia->save();
    }

    public function atualizar(array $noticiaArray, int $id): bool
    {
        $noticia = News::find($id);
        $noticia->fill($noticiaArray);
        return $noticia->save();
    }

    public function pegarNoticiaPorSlug(string $slug): ?News
    {
        return News::where(['slug_title' => $slug])?->first();
    }

    public function excluirNoticia($id): bool
    {
        $noticia = News::find($id);
        return $noticia->delete();
    }

    public function totalNoticias(): int
    {
        return News::count();
    }

    public function totalNoticiasInativas(): int
    {
        return News::where(['is_active' => 0])
            ->withTrashed()
            ->count();
    }

    public function pegarNoticiasPorCategoria(int $category_id, int $id_noticia = null, int $qtde = 3): Collection
    {
        $query =  News::where(['is_active' => 1])
            ->where(['category_id' => $category_id]);

        if(!is_null($id_noticia)) {
           $query->where('id', '!=', $id_noticia);
        };

        return $query->inRandomOrder()
            ->limit($qtde)
            ->get();
    }
}
