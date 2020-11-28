<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        // dd(auth()->user());
        return view('pages.upload');
    }

    public function store(Request $request)
    {
        dd($request->caption);
    }
}