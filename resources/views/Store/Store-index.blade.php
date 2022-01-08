<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商店總覽</title>
    {{-- 導入Bootstrap語法 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/api">
                            <h1>
                                商品總覽
                            </h1>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/my-account">業者登入</a>
                    </li>
                </ul>
                <form class="d-flex" action="/search" method="get">
                    <input class="form-control me-2" type="Search" placeholder="關鍵字" name="keyword">
                    <button class="btn btn-outline-success  btn-sm" type="submit">搜尋產品</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row py-5">
            @foreach ($store as $storelist)
                <div class="col-3 py-3">
                    <div class="card" style="width: 18rem; height: 35rem">
                        <img src="{{ $storelist['photo'] }}" style="width: auto; height: 200px" class="card-img-top"
                            alt="...">
                        <div class="card-body" style="width: auto; height: 345px">
                            <h5 class="card-title" color="red">{{ $storelist['name'] }}</h5>
                            <div>
                                <p class="card-textarea">{{ $storelist['describe'] }}</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/api/{{ $storelist['id'] }}" class="btn btn-primary">檢視產品資訊</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



</body>

</html>
