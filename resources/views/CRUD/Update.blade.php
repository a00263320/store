<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>更新</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h1>
                輸入更改資訊
            </h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/my-account-user">商品總覽</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-6 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/my-account-loginout">登出</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row py-3 px-3">
        <form name="input" action="/my-account-user/{{ $storeup['id'] }}" method="post">
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
            <input type="text" name="update_origin" value="{{ $storeup->origin }}">

            <button type="submit" class="btn btn-primary" style="width:auto">
                確定更新產品資訊
            </button>
        </form>
    </div>
</body>

</html>
