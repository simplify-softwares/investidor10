<?php

namespace App\Http\Actions\Admin\Noticias;

use App\Http\Controllers\Controller;

class ListarNoticiasAction extends Controller
{
    public function __invoke()
    {
        return view("admin.noticias.listar");
    }
}
