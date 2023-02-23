<?php

namespace App\Http\Actions\Admin\Login;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LogoutAction extends Controller
{

    public function __invoke(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
