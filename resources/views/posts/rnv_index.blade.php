@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Givalue</title>
  </head>
  <body>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <a href="/posts/{{ $post->id }}">{{ $post->house_name }}</a>
                @if ($post->house->front_image)
                    <img src="{{ $post->house->front_image }}">
                @endif
                @if ($post->house->interior_image1)
                    <img src="{{ $post->house->interior_image1 }}">
                @endif
                @if ($post->house->interior_image2)
                    <img src="{{ $post->house->interior_image2 }}">
                @endif
                @if ($post->house->plan_image1)
                    <img src="{{ $post->house->plan_image1 }}">
                @endif
                @if ($post->house->plan_image2)
                    <img src="{{ $post->house->plan_image2 }}">
                @endif
                @if ($post->house->plan_image2)
                    <img src="{{ $post->house->plan_image2 }}">
                @endif
                
                @if ($post->renovation_image1)
                    <img src="{{ $post->renovation_image1 }}">
                @endif
                @if ($post->renovation_image2)
                    <img src="{{ $post->renovation_image2 }}">
                @endif
                @if ($post->renovation_image3)
                    <img src="{{ $post->renovation_image3 }}">
                @endif
                @if ($post->renovation_image4)
                    <img src="{{ $post->renovation_image4 }}">
                @endif
            </div>
        @endforeach
    </div>
    @can('realestate')
    <div class="back">[<a href="/">back</a>]</div>
    @endcan
</body>
</html>

@endsection