<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>產品資訊</title>
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
                        <a class="nav-link active " aria-current="page" href="/my-account-user">
                            <h1 class="text-dark">
                                商品總覽
                            </h1>
                        </a>
                    </li>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <li class="nav-item text-dark">
                            <a class="nav-link active" href="/my-account-user/create">
                                <h4>新增商品</h4>
                            </a>
                        </li>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex" action="/my-account-user/search" method="get">
                            <input class="form-control me-2" type="Search" placeholder="關鍵字" name="keyword"
                                style="height: 50px">
                            <button class="btn btn-outline-success  btn-sm" style=" height: 50px"
                                type="submit">搜尋</button>
                        </form>
                    </div>
                </ul>
                <ul class="navbar-nav me-6 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/api">登出</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row py-5">
            <div class="col-6">
                <div>
                    <img src="{{ $store['photo'] }}" style="width: auto; height: auto" alt="...">
                </div>
            </div>

            <div class="col-6">
                {{-- 名稱 --}}
                <div>
                    <h2>
                        {{ $store['name'] }}
                    </h2>
                </div>
                {{-- 價錢 --}}
                <div>
                    <h5>NT$ <span class="h3"> {{ $store['price'] }} </span> </h5>
                </div>

                {{-- 描述  品牌  生產地 --}}
                <hr>

                {{-- 用row把全部框起來區隔一ㄍ區塊 --}}
                <div class="row">
                    {{-- 描述 --}}
                    <div class="col">
                        <span style="font-size: 115%">描&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;述:</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 115%">{{ $store['describe'] }}</span>
                    </div>
                    <hr>
                    {{-- 品牌 --}}
                    <div class="col">
                        <span style="font-size: 115%">品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;牌:</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 115%">{{ $store['company'] }}</span>
                    </div>
                    <hr>
                    {{-- 生產地 --}}
                    <div class="col">
                        <span style="font-size: 115%">生&nbsp;產&nbsp;地:</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 115%">{{ $store['origin'] }}</span>
                    </div>
                    <hr>
                    {{-- 操作 --}}
                    <div class="col">
                        <span style="font-size: 115%">操&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作:</span>
                    </div>
                    <div class="col">
                        <a href="/my-account-user/{{ $store['id'] }}/edit" class="btn btn-info">編輯產品所有資訊</a>

                        <form action="/my-account-user/{{ $store['id'] }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit" style="width:156px">刪除</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>

</body>

</html>
