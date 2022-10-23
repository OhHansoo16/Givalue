<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use Storage;

class HousesController extends Controller
{
    
    public function index(House $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
    }
    
    public function store(Request $request)
    {
        
        $house = new House;
        $input = $request['post'];
        
        $image = $request->file('front_image');
        $path = Storage::disk('s3')->putFile('givalue', $image, 'public');
        $house->front_image = Storage::disk('s3')->url($path);
        
        $image = $request->file('interior_image1');
        $path = Storage::disk('s3')->putFile('givalue', $image, 'public');
        $house->interior_image1 = Storage::disk('s3')->url($path);
        
        $image = $request->file('interior_image2');
        $path = Storage::disk('s3')->putFile('givalue', $image, 'public');
        $house->interior_image2 = Storage::disk('s3')->url($path);
        
        $image = $request->file('plan_image1');
        $path = Storage::disk('s3')->putFile('givalue', $image, 'public');
        $house->plan_image1 = Storage::disk('s3')->url($path);
        
        $image = $request->file('plan_image2');
        $path = Storage::disk('s3')->putFile('givalue', $image, 'public');
        $house->plan_image2 = Storage::disk('s3')->url($path);
        
        $house->fill($input)->save();
    
        return redirect('/');
    }
    
    public function create()
    {
        return view('posts/create');
    }
}
