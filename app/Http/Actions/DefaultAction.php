<?php

namespace App\Http\Actions;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class DefaultAction extends \App\Http\Controllers\Controller
{

    public function __invoke(Request $request, Response $response): View
    {
        return view("default.home");
    }

}
