<?php

namespace App\Http\Actions\Admin\Login;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AutenticarLoginAction extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route("dashboard"));
        }

        return back()->withErrors([
            'email' => 'Nenhum usuário encontrado com essas credenciais.',
        ])->onlyInput('email');
    }
}
