<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>價錢/數量更新成功</title>
</head>
<body>
    <form action="/api/{{$priquaapi['id']}}" >
        @csrf
        @method('put')
        產品資訊更新成功
        <input type="submit" value="返回商品資訊">
        </form>
</body>
</html>
