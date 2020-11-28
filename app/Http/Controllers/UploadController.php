<?php

namespace App\Http\Controllers;

class UploadController extends Controller
{
    public function index()
    {
        // dd(auth()->user());
        return view('pages.upload');
    }
}