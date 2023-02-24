<?php

namespace App\Repositories\Noticias;

use App\Models\News;
use Illuminate\Database\Eloquent\Builder;

interface NewsRepositoryInterface
{
    public function pegarNoticiaPorId(int $id): ?News;
    public function listarTodas(string $busca = null, int $category = null): ?Builder;
    public function salvar(array $noticia): bool;
    public function atualizar(array $noticia, int $id): bool;
    public function pegarNoticiaPorSlug(string $slug): ?News;
    public function excluirNoticia($id): bool;
    public function totalNoticias(): int;
    public function totalNoticiasInativas(): int;
    public function pegarNoticiasPorCategoria(int $category_id, int $id, int $qtde = 3);
}
