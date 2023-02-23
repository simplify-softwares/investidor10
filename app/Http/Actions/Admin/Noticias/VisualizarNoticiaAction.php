<?php

namespace App\Http\Actions\Admin\Noticias;

use App\Http\Controllers\Controller;
use App\UseCases\Noticias\PegarNoticiaPorIdUseCase;
use Illuminate\Http\Request;

class VisualizarNoticiaAction extends Controller
{
    public function __invoke(Request $request, PegarNoticiaPorIdUseCase $pegarNoticiaPorIdUseCase, int $id)
    {
        try {
            $noticia = $pegarNoticiaPorIdUseCase->handle($id);
            return view("admin.noticias.visualizar", ['noticia' => $noticia]);
        }catch (\DomainException $exception) {
            return redirect()->route('news.listar')->with('warning', $exception->getMessage());
        }
    }
}
