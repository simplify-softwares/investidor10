<?php

namespace App\Http\Actions\Admin\Noticias;

use App\Http\Controllers\Controller;

class CadastrarNoticiaAction extends Controller
{
    public function __invoke()
    {
        return view("admin.noticias.cadastrar");
    }
}
