<?php

namespace App\Http\Actions\Admin\Login;

use App\Http\Controllers\Controller;
use App\Models\User;

class TelaLoginAction extends Controller
{
    public function __invoke()
    {
        $user = new User();
        return view("admin.login.login", ['user' => $user]);
    }
}
