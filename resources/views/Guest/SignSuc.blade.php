<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>創建會員成功</title>
</head>

{{-- 導入Bootstrap CSS 語法 --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
{{-- 導入bootstrap JS 語法 --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <h1 class="text-dark">會員創建成功</h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item text-dark">
                        <a class="nav-link active" aria-current="page" href="/api">商品總覽</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-6 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/my-account">賣家登入</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/guest-login">會員登入</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid my-4">
        <div class="row py-5 ">
            <div class="col">
                <div class="card mx-auto" style="width: 750px">
                    <h3>
                        <div class="card-header">
                            創建帳戶成功!!
                        </div>
                    </h3>
                    <div class="card-body">
                        <p class="card-text">帳號創建成功，如要登入請回到登入畫面登入。</p>
                        <p class="card-text">如您想使用遊客模式觀看、查詢產品，請點選下方按鈕至商店總覽觀看商品。</p>
                        <form>
                            <a href="/api" class="btn btn-primary">商品總覽首頁</a>
                            <a href="/guest-login" class="btn btn-primary">返回登入</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
