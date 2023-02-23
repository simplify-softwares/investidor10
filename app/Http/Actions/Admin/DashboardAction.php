<?php

namespace App\Http\Actions\Admin;

use App\Http\Controllers\Controller;
use App\UseCases\DashboardUseCase;

class DashboardAction extends Controller
{
    public function __invoke(DashboardUseCase $dashboardUseCase)
    {
        $counters = $dashboardUseCase->handle();
        extract($counters);

        return view("admin.dashboard", $counters);
    }
}
