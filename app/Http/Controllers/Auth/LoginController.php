<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function store(Request $request)
    {
        // Validasi email dan password
        $this->validate($request, [
            'email'    => 'required',
            'password' => 'required|min:6',
        ]);

        // Cara yang lebih simple
        // if (!auth()->attempt($request->only('email', 'password'))) {
        //     return back()->with('status', 'Ups... email dan password salah!');
        // };

        // return redirect('/');

        // Validasi login dengan menggunakan email atau username
        $email    = $request->get('email');
        $password = $request->get('password');

        $login_type = filter_var($email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Jika user berhasil login
        if (auth()->attempt([$login_type => $email, 'password' => $password])) {
            return redirect('/');
        }

        // Jika user tidak berhasil login
        return back()->with('status', 'Ups... email dan password salah!');
    }
}
