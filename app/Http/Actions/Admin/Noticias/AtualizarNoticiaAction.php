<?php

namespace App\Http\Actions\Admin\Noticias;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoticiaRequest;
use App\UseCases\Noticias\AtualizarNoticiaUseCase;
use Illuminate\Support\Str;

class AtualizarNoticiaAction extends Controller
{
    public function __invoke(NoticiaRequest $request, AtualizarNoticiaUseCase $atualizarNoticiaUseCase, $id)
    {
        try {

            $noticia = $request->all();
            $noticia['slug_title'] = Str::slug($noticia['title'], language: 'pt_BR');

            $atualizarNoticiaUseCase->handle($noticia, $id);

            return redirect()->route("news.listar")->with('success', 'Notícia atualizada com sucesso!');
        } catch (\DomainException $exception) {
            return redirect()->route('news.listar')->with('warning', $exception->getMessage());
        }
    }
}
