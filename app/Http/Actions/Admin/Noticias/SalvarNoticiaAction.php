<?php

namespace App\Http\Actions\Admin\Noticias;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoticiaRequest;
use App\UseCases\Noticias\SalvarNoticiaUseCase;
use Illuminate\Support\Str;

class SalvarNoticiaAction extends Controller
{
    public function __invoke(NoticiaRequest $request, SalvarNoticiaUseCase $cadastrarNoticiaUseCase)
    {
        $noticia = $request->all();
        $noticia['slug_title'] = Str::slug($noticia['title'], '-');
        $cadastrarNoticiaUseCase->handle($noticia);

        return redirect()->route("news.listar")->with('success', 'Notícia cadastraada com sucesso!');
    }
}
