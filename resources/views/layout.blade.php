<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Recipe book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-4">
                <div class="sidebar-item">
                    <div>
                        <img src="{{ asset('img/fork.png')}}" width="40px">
                    </div>
                    <div>
                        <h1>Название сайта</h1>
                    </div>
                </div>
                <div class="sidebar-item">
                    <div>
                        <img src="{{asset('img/book.png')}}" width="30px">
                    </div>
                    <a href="/recipes"><h5>Мои рецепты</h5></a>
                </div>
                <div class="sidebar-item">
                    <div>
                        <img src="{{asset('img/puzzle.png')}}" width="30px">
                    </div>
                    <a href="/ingredients"><h5>Ингредиенты</h5></a>
                </div>
            </div>

            <div class="col-8">
                <div class="sidebar-logout">
                    <img src="{{asset('img/exit.png')}}" width="30px">
                    <a href="/home"><h5>Выход</h5></a>
                </div>
                <div class="main">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>
</body>
</html>
