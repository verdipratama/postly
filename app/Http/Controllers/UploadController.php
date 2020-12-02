<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        // dd(auth()->user());
        // Untuk melihat relasi di model/User
        // dd(auth()->user()->uploads());
        return view('pages.upload');
    }

    public function store(Request $request)
    {
        // dd($request->caption);
        $this->validate($request, [
            'caption' => 'required',
        ]);

        // Cara inline
        $request->user()->uploads()->create($request->only('caption'));
        return back();

        // Cara pertama
        // Post::create([
        //     'user_id' => auth()->id(),
        //     'caption' => $request->caption,
        // ]);

        // Cara kedua
        // $request->user()->uploads()->create([
        //     'caption' => $request->caption,
        // ]);
    }
}