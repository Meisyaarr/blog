<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function index()
    {
        return view('contents.index');
    }

    public function show(){
        return view('contents.show');
    }
    
}
