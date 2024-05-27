<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('/css/main.css')}}" rel="stylesheet" >
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script src="/js/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var eventCalllback = function(e) {
            var el = e.target,
                clearVal = el.dataset.phoneClear,
                pattern = el.dataset.phonePattern,
                matrix_def = "+7(___) ___-__-__"
            matrix = pattern ? pattern : matrix_def,
                i = 0,
                def = matrix.replace(/\D/g, ""),
                val = e.target.value.replace(/\D/g, "");
            if (clearVal !== 'false' && e.type === 'blur') {
                if (val.length < matrix.match(/([\_\d])/g).length) {
                    e.target.value = '';
                    return;
                }
            }
            if (def.length >= val.length) val = def;
            e.target.value = matrix.replace(/./g, function(a) {
                return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
            });
        }
        var phone_inputs = document.querySelectorAll('[data-phone-pattern]');
        for (let elem of phone_inputs) {
            for (let ev of ['input', 'blur', 'focus']) {
                elem.addEventListener(ev, eventCalllback);
            }
        }
    });
</script>
<body>
<div class="wrapper">
    <div class="navbar bg-black">
        <div class="w-100 nav-container">
            <div class="logo">
               <a href="/"><img style="width: 90px;" src="{{ asset('/img/logo.png') }}" alt=""></a>
            </div>
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <div class="menu-items">
                <li><a href="/admin/projects">Проекты</a></li>
                <li><a href="/admin/decor">Декор</a></li>
                <li><a href="/admin/pictures">Картины</a></li>
                <li><a href="#">Заказы на дизайн</a></li>
                <li><a href="#">Заказы на декор</a></li>
                <li><a href="#">Заказы на картины</a></li>
            </div>
        </div>
    </div>
    <nav class="navigation bg-black" style="width: 100%;">
        <a href="/"><img class="navigation-logo" src="{{ asset('/img/logo.png') }}" alt=""></a>
        <ul class="navigation-list w-75 d-flex text-light pt-3 linking justify-content-end">
            <li class="navigation-list-item pe-5">
                <a class="nav-link" aria-current="page" href="/admin/projects">Проекты</a>
            </li>
            <li class="navigation-list-item pe-5">
                <a class="nav-link" aria-current="page" href="/admin/decor">Декор</a>
            </li>
            <li class="navigation-list-item pe-5">
                <a class="nav-link" aria-current="page" href="/admin/pictures">Картины</a>
            </li>
            <li class="navigation-list-item pe-5">
                <a class="nav-link" aria-current="page" href="/admin/designorders/">Заказы на дизайн</a>
            </li>
            <li class="navigation-list-item pe-5">
                <a class="nav-link" aria-current="page" href="/admin/pictureorders">Заказы на картины</a>
            </li>
            <li class="navigation-list-item pe-5">
                <a class="nav-link" aria-current="page" href="/admin/decororders/">Заказы на декор</a>
            </li>
        </ul>
        @guest
            <a href="login"><button class="navigation-button ms-5 me-1">Войти</button></a>
        @endguest
        @auth
            <a href="logout"><button class="navigation-button ms-5 me-1">Выйти</button></a>
        @endauth
    </nav>
    @yield('content')
</div>
</body>
</html>
