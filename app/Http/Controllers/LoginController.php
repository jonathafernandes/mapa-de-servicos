<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/services');
        } else {
            return redirect()->back()->withErrors(['message' => 'Credenciais inválidas. Por favor, tente novamente.']);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
