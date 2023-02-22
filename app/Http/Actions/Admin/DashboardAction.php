<?php

namespace App\Http\Actions\Admin;

use App\Http\Controllers\Controller;

class DashboardAction extends Controller
{
    public function __invoke()
    {
        return view("admin.dashboard");
    }
}
