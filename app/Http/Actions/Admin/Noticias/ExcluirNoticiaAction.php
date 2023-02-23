<?php

namespace App\Http\Actions\Admin\Noticias;

use App\Http\Controllers\Controller;
use App\UseCases\Noticias\ExcluirNoticiaUseCase;

class ExcluirNoticiaAction extends Controller
{
    public function __invoke(ExcluirNoticiaUseCase $excluirNoticiaUseCase, int $id)
    {
        $excluirNoticiaUseCase->handle($id);

        return [
            'status' => 'success',
            'mensagem' => 'Notícia foi excluída com sucesso!'
        ];
    }
}
