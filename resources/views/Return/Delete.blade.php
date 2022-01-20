<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>刪除商品</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <h1 class="text-dark">
                刪除成功
            </h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item text-dark">
                        <a class="nav-link active" aria-current="page" href="/my-account-user">商品總覽</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-6 mb-2 mb-lg-0">
                    <li class="nav-item text-dark">
                        <a class="nav-link" href="/my-account-loginout">登出</a>
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
                            產品刪除成功!
                        </div>
                    </h3>
                    <div class="card-body">
                        <p class="card-text">產品刪除成功! 請返回商品總覽繼續操作。</p>
                        <form name="input" action="/my-account-user">
                            @csrf
                            @method('post')
                            <button type="submit" class="btn btn-primary" style="width:122px">返回商品首頁</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
