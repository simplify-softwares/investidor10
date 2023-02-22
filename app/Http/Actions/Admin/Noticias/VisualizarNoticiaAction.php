<?php

namespace App\Http\Actions\Admin\Noticias;

use App\Http\Controllers\Controller;

class VisualizarNoticiaAction extends Controller
{
    public function __invoke($noticia)
    {
        return view("admin.noticias.visualizar");
    }
}
