<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Givalue</title>
  </head>
  <body>
    [<a href='/posts/create'>create</a>]
    <div class='posts'>
      @foreach ($posts as $post)
        <div class='post'>
          <a href="/posts/{{ $post->id }}">{{ $post->house_name }}</a>
          @if ($post->front_image)
              <img src="{{ $post->front_image }}">
          @endif
          @if ($post->interior_image1)
            <img src="{{ $post->interior_image1 }}">
          @endif
          @if ($post->interior_image2)
            <img src="{{ $post->interior_image2 }}">
          @endif
          @if ($post->plan_image1)
            <img src="{{ $post->plan_image1 }}">
          @endif
          @if ($post->plan_image2)
            <img src="{{ $post->plan_image2 }}">
          @endif
        </div>
      @endforeach
      </div>
    </body>
</html>