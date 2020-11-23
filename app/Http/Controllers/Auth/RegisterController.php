<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function store(Request $request)
    {
        // dd = die dump for Debugging
        // dd('HELLO');
        // dd($request->username); // verdipratama

        // Validation
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name'  => 'required|max:255',
            'username'   => 'required|max:255',
            'email'      => 'required|email|max:255',
            'password'   => 'required|confirmed',
        ]);

        // dd($request->only('email', 'password')); // berisikan email dan pass
        // Store User dari User.php Model
        User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'username'   => $request->username,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        // Sign the user in
        auth()->attempt($request->only('email', 'password'));

        // Redirect to Homepage
        // return redirect()->route('dashboard');
        return redirect('/');
    }
}
