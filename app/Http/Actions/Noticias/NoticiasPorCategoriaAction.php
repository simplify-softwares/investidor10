<?php

namespace App\Http\Actions\Noticias;

use App\Http\Controllers\Controller;
use App\UseCases\Noticias\Pegar3NoticiasPorCategoriaUseCase;

class NoticiasPorCategoriaAction extends Controller
{
    public function __invoke()
    {
        return view("default.home");
    }
}
