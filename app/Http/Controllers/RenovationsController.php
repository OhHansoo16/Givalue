<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Renovation;
use App\House;
use Storage;
use Illuminate\Support\Facades\Auth;


class RenovationsController extends Controller
{
    public function show(House $post)
    {
        $user = Auth::user()->role;
        if($user == 'designer'){
            return view('posts/renovation')->with(['post' => $post]);
        }
    }
    
    public function index(Renovation $post)
    {
        return view('posts/rnv_index')->with(['posts' => $post->get()]);
    }

    public function store(Request $request)
    {
        
        $renovation = new Renovation;
        $input = $request['post'];
        
        $image = $request->file('renovation_image1');
        $path = Storage::disk('s3')->putFile('givalue', $image, 'public');
        $renovation->renovation_image1 = Storage::disk('s3')->url($path);
        
        $image = $request->file('renovation_image2');
        $path = Storage::disk('s3')->putFile('givalue', $image, 'public');
        $renovation->renovation_image2 = Storage::disk('s3')->url($path);
        
        $image = $request->file('renovation_image3');
        $path = Storage::disk('s3')->putFile('givalue', $image, 'public');
        $renovation->renovation_image3 = Storage::disk('s3')->url($path);
        
        $image = $request->file('renovation_image4');
        $path = Storage::disk('s3')->putFile('givalue', $image, 'public');
        $renovation->renovation_image4 = Storage::disk('s3')->url($path);
        
        $renovation->fill($input)->save();
    
        return redirect('/');
    }
}