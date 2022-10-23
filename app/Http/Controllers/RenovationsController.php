<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Renovation;
use App\House;
use Storage;

class RenovationsController extends Controller
{
    public function show(House $post)
    {
        return view('posts/renovation')->with(['post' => $post]);
    }
}
