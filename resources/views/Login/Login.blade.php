<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入畫面</title>
</head>
{{-- 導入Bootstrap css語法 --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h1>登入/註冊</h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/api">商品總覽</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-6">
                登入
                <form action="/my-account-api" method="post">
                    @csrf
                    {{-- 登入帳號 --}}
                    <div class="mb-3">
                        <label for="LoginUser" class="form-label">輸入使用者名稱</label>
                        <input type="text" class="form-control" name="LoginUser">
                    </div>
                    {{-- 登入密碼 --}}
                    <div class="mb-3">
                        <label for="LoginPassword" class="form-label">輸入使用者密碼</label>
                        <input type="password" class="form-control" name="LoginPassword">
                    </div>

                    <button type="submit" class="btn btn-primary">登入</button>
                </form>
            </div>

            <div class="col-6">
                註冊
                <form action="/my-account-sign-api" method="post">
                    @csrf
                    {{-- 註冊使用者名稱 --}}
                    <div class="mb-3">
                        <label for="SignUser" class="form-label">輸入使用者名稱</label>
                        <input type="text" class="form-control" name="SignUser">
                    </div>
                    {{-- 註冊密碼 --}}
                    <div class="mb-3">
                        <label for="SignPassword" class="form-label">輸入使用者密碼</label>
                        <input type="password" class="form-control" name="SignPassword">
                    </div>

                    <button type="submit" class="btn btn-primary">註冊</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
