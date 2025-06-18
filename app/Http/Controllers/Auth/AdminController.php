<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class AdminController extends Controller
{
    public function loginGet(Request $request)
    {
        return view('Dashboard.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }


        return redirect(route('admin.loginGet'))->withErrors([
            'email' => 'Invalid login detail.',
        ]);
    }


    public function dashboard()
    {
        return view('Dashboard.dashboard');
    }

    public function logout()
    {
        FacadesSession::flush();
        Auth::logout();

        return redirect(route('admin.loginGet'));
    }
}
