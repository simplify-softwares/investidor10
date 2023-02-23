<?php

namespace App\Repositories\Noticias;

use App\Models\News;
use Illuminate\Pagination\LengthAwarePaginator;

interface NewsRepositoryInterface
{
    public function pegarNoticiaPorId(int $id): ?News;
    public function listarTodas(): ?LengthAwarePaginator;
    public function salvar(array $noticia): bool;
    public function atualizar(array $noticia, int $id): bool;
    public function pegarNoticiaPorSlug(string $slug): ?News;
    public function excluirNoticia($id): bool;
    public function totalNoticias(): int;
    public function totalNoticiasInativas(): int;
}
