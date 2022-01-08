<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>更新</title>
</head>
<body>
    <form name="input" action="/api-user/{{ $storeup ['id']}}" method="post">
    @csrf
    @method('put')
    更改產品圖片
    <input type="text" name="update_photo" value="{{ $storeup->photo }}">
    <br>
    <br>
    更改產品種類
    <input type="text" name="update_class" value="{{ $storeup->class }}">
    <br>
    <br>
    更改產品名稱
    <input type="text" name="update_name" value="{{ $storeup->name }}">
    <br>
    <br>
    更改產品描述
    <br>
    <br>
    <textarea name="update_describe" cols="30" rows="10">{{ $storeup->describe }}</textarea>
    <br>
    <br>
    更改產品數量
    <input type="text" name="update_quantity" value="{{ $storeup->quantity }}">
    <br>
    <br>
    更改產品價格
    <input type="text" name="update_price" value="{{ $storeup->price }}">
    <br>
    <br>
    更改公司
    <input type="text" name="update_company" value="{{ $storeup->company }}">
    <br>
    <br>
    更新生產地
    <input type="text" name="update_origin" value="{{ $storeup->origin}}">
    <input type="submit" value="確定更新產品資訊">
    </form>
</body>
</html>
