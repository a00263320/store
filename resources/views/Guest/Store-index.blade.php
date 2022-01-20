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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"> {{-- 文字化的連結 --}}
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/guest">
                            <h1 class="text-dark">
                                商品總覽
                            </h1>
                        </a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <form class="d-flex" action="/guest" method="get">
                                <input class="form-control me-1" style=" height: 50px" type="Search" placeholder="關鍵字"
                                    name="keyword">
                                <button class="btn btn-outline-success  btn-sm" style=" height: 50px"
                                    type="submit">搜尋</button>
                            </form>
                    </div>

                </ul>
                <ul class="navbar-nav me-6 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/guest-loginout">登出</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row py-3">
            @foreach ($guest as $guest)
                <div class="col-3 py-3">
                    <div class="card" style="width: 18rem; height: 43rem">
                        <img src="{{ $guest['photo'] }}" style="width: auto; height: 250px" class="card-img-top"
                            alt="...">
                        <div class="card-body" style="width: auto; height: 345px">
                            <h5 class="card-title" color="red">{{ $guest['name'] }}</h5>
                            <div>
                                <p class="card-textarea">{{ $guest['describe'] }}</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/guest/{{ $guest['id'] }}" class="btn btn-primary">檢視產品資訊</a>
                            <a href="/guest/{{ $guest['id'] }}" class="btn btn-warning">購買</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</body>

</html>
