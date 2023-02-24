<?php

namespace App\Http\Actions\Admin\Noticias;

use App\Http\Controllers\Controller;
use App\UseCases\Noticias\ListarNoticiasUseCase;
use Illuminate\Http\Request;

class ListarNoticiasAction extends Controller
{
    public function __invoke(Request $request, ListarNoticiasUseCase $listarNoticiasUseCase)
    {
        $noticias = $listarNoticiasUseCase->handle()->paginate();
        return view("admin.noticias.listar", ['noticias' => $noticias]);
    }
}
