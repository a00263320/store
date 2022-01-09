<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品更新</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h1>
                產品更新成功
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

    <div class="container-fluid my-4">
        <div class="row py-5 ">
            <div class="col">
                <div class="card mx-auto" style="width: 750px">
                    <h3>
                        <div class="card-header">
                            產品資訊更新成功!
                        </div>
                    </h3>
                    <div class="card-body">
                        <p class="card-text">更新產品資訊成功! 請返回商品資訊繼續操作。</p>

                        <form action="/my-account-user/{{ $reup ['id'] }}" >
                            @csrf
                            @method('put')
                            <input class="btn btn-primary" type="submit" value="返回商品資訊">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
