<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新增</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/my-account-user">
                            <h1>商品總覽</h1>
                        </a>
                    </li>
                    <h4 class="collapse navbar-collapse">
                        請輸入產品資訊
                    </h4>
                </ul>
                <ul class="navbar-nav me-6 mb-2 mb-lg-0">
                    <li class="nav-item text-dark">
                        <a class="nav-link" href="/my-account-loginout">登出</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row py-3 px-3">
        <form name="input" action="/my-account-user" method="post">
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

            <button type="submit" class="btn btn-primary" style="width:122px">
                確定新增產品
            </button>
        </form>
    </div>
</body>

</html>
