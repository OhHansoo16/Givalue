<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Givalue</title>
    </head>
    <body>
        <h1>物件情報</h1>
        
        <form action="/renovations" method="post" enctype="multipart/form-data">
            @csrf
            <h2 class="house_name">
                {{ $post->house_name }}
            </h2>
            
            <div class="concept">
                <h2>コンセプト</h2>
                <input type="text" name="post[concept]" placeholder="入力してください">
            </div>
            
            <div class="post">
                <div class='before_image'>
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
                <h2>リノベーションイメージ</h2>
                    <h3>内装写真</h3>
                    <input type="file" name="renovation_image1">
                    <input type="file" name="renovation_image2">
                    <h3>図面</h3>
                    <input type="file" name="renovation_image3">
                    <input type="file" name="renovation_image4">
            </div>
            
            <div class="renovation_detail">
                <h2>詳細</h2>
                <input type="text" name="post[renovation_detail]" placeholder="入力してください">
            </div>
            
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="posts/index">back</a>]</div>
    </body>
</html>