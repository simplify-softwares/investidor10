<?php

namespace App\Http\Actions\Noticias;

class VisualizarNoticiaAction extends \App\Http\Controllers\Controller
{

    public function __invoke()
    {
        return view("noticias.visualizar");
    }

}
