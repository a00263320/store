<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員已登出</title>
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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="/api">
                            <h1>商品總覽</h1>
                        </a>
                    </li>
                    <h4 class="collapse navbar-collapse">
                        會員已登出
                    </h4>

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
                            會員帳戶已登出
                        </div>
                    </h3>
                    <div class="card-body">
                        <p class="card-text">如只要觀看、查詢產品，請點選下方按鈕至商店總覽觀看商品。</p>
                        <p class="card-text">如要重新購買物品，請重新登入。</p>
                        <form>
                            <a href="/api" class="btn btn-primary">商品總覽首頁</a>
                            <a href="/guest-login" class="btn btn-primary">重新登入</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
