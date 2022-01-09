<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>業主已登出</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h1>業主已登出</h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/api">商品總覽</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-6 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/my-account">業者登入</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row py-5">
            <div class="card">
                <div class="card-header">
                    帳戶已登出
                </div>
                <div class="card-body">
                    <h5 class="card-title">業者使用者已登出</h5>
                    <p class="card-text">如要觀看、查詢產品，請點選下方按鈕至商店總覽觀看商品。</p>
                    <p class="card-text">如業主要編輯產品資訊，請點選右上方按鈕登入，已便編輯。</p>
                    <a href="/api" class="btn btn-primary">回到商品總覽首面</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>