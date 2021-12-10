<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // VIEW LAYOUT LOGIN
    public function Index() {
        return view('login.index', [
            'title' => 'Halaman login',
            'active' => 'login'
        ]);
    }

    // FUNGSI LOGIN
    public function Masuk(Request $request) {
        $dataLogin = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($dataLogin)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Gagal');
    }

    // FUNGSI LOGOUT
    public function Keluar() {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
