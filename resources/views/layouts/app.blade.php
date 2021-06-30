<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>@yield('title')</title>
    
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <nav class="header__navigation">
                    <div class="header__logo">
                        <img src="/img/logo.png" alt="">
                    </div>

                        <ul class="header__menu">
                            <li class="header__item header__item--active"><a href="{{URL::route('home')}}" class="header__link">Главная</a></li>
                            <li class="header__item"><a href="" class="header__link">О нас</a></li>
                            <li class="header__item"><a href="{{route('poema')}}" class="header__link">poema</a></li>
                            @if(Auth::check())
                            <li class="header__item"><a href="{{route('poema')}}" class="header__link">{{ auth()->user()->name }}</a></li>
                            <li class="header__item"><a href="{{route('logout')}}" class="header__link">log out</a></li>
                            @else
                            <li class="header__item"><a href="{{route('login')}}" class="header__link">Логин</a></li>
                            <li class="header__item"><a href="{{route('register')}}" class="header__link">Register</a></li>
                            @endif
                        </ul>
                    
                </nav>
            </div>
        </header>

        @yield('content')

        <footer class="footer container">
            <div class="whole">
            <img src="/img/logo.png" alt="">
            <div class="foot-info">
                <ul>
                    <li><a href="" class="footer__link">Новости</a></li>
                    <li><a href="" class="footer__link">О нас</a></li>
                    <li><a href="" class="footer__link">Поддержка</a></li>
                </ul>
                <ul>
                    <li><a href="" class="footer__link">Контакты</a></li>
                    <li><a href="" class="footer__link">Телефон: 8705 995 38 64</a></li>
                    <li><a href="" class="footer__link">Email: bakosh21345@gmail.com</a></li>
                </ul>
                <ul>
                    <li><a href="" class="footer__link">Другие сервисы</a></li>
                    <li><a href="" class="footer__link">Usyn</a></li>
                    <li><a href="" class="footer__link">Jasa</a></li>
                </ul>
            </div>
        </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>