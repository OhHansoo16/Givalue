<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Givalue</title>
    </head>
    <body>
        <h1>物件情報</h1>
        
        <form action="/houses" method="post" enctype="multipart/form-data">
            @csrf
            <div class="house_name">
                <h2>物件名</h2>
                <input type="text" name="post[house_name]" placeholder="入力してください"/>
            </div>
            <div>
                <h2>物件写真</h2>
                    <h3>外見写真</h3>
                    <input type="file" name="front_image">
                    <h3>内装写真</h3>
                    <input type="file" name="interior_image1">
                    <input type="file" name="interior_image2">
                    <h3>図面</h3>
                    <input type="file" name="plan_image1">
                    <input type="file" name="plan_image2">
            </div>
            
            <div class="floor_plan">
                <h2>間取り</h2>
                <input type="text" name="post[floor_plan]" placeholder="入力してください">
            </div>
            
            <div class="age">
                <h2>築年数</h2>
                <input type="text" name="post[age]" placeholder="入力してください">
            </div>
            
            <div class="land_area">
                <h2>敷地面積</h2>
                <input type="text" name="post[land_area]" placeholder="入力してください">
            </div>
            
            <div class="building_area">
                <h2>建築面積</h2>
                <input type="text" name="post[building_area]" placeholder="入力してください">
            </div>
            
            <div class="address">
                <h2>住所</h2>
                <input type="text" name="post[address]" placeholder="例:東京都港区赤坂2丁目11番7号">
            </div>
            
            <div class="detail">
                <h2>詳細</h2>
                <input type="text" name="post[detail]" placeholder="例:エアコン完備、ガスコンロ対応、高速ネット対応">
            </div>
            
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>