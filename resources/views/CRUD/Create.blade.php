<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新增</title>
</head>
<body>
    <form name="input" action="/api-user" method="post">
    @csrf
    輸入產品種類
    <input type="text" name="creat_class">
    <br>
    <br>
    輸入產品名稱
    <input type="text" name="creat_name">
    <br>
    <br>
    上傳產品圖片
    <input type="text" name="creat_photo">
    <br>
    <br>
    輸入產品描述
    <br>
    <br>
    <textarea name="creat_describe" cols="30" rows="10"></textarea>
    <br>
    <br>
    輸入產品數量
    <input type="text" name="creat_quantity">
    <br>
    <br>
    輸入產品價格
    <input type="text" name="creat_price">
    <br>
    <br>
    輸入產品公司
    <input type="text" name="creat_company">
    <br>
    <br>
    輸入生產地
    <input type="text" name="creat_origin">

    <input type="submit" value="確定新增">
    </form>
</body>
</html>
