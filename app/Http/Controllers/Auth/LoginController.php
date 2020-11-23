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
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // dd('You are Login');
        // Jika user tidak berhasil login
        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Ups... email dan password salah!');
        };

        return redirect('/');
    }
}
