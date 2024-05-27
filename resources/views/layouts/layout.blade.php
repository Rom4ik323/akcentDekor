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
                    <img style="width: 90px;" src="{{ asset('/img/logo.png') }}" alt="">
                </div>
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="menu-items">
                    <li><a href="/">Дизайн</a></li>
                    <li><a href="/decor">Декор</a></li>
                    <li><a href="/painting">Картины</a></li>
                    <li><a href="#">Портфолио</a></li>
                    <li><a href="#">Контакты</a></li>
                </div>
            </div>
        </div>
        <nav class="navigation bg-black" style="width: 100%;">
            <a href="/"><img class="navigation-logo" src="{{ asset('/img/logo.png') }}" alt=""></a>
            <ul class="navigation-list w-75 d-flex text-light pt-3 linking justify-content-end">
                <li class="navigation-list-item pe-5">
                    <a class="nav-link" aria-current="page" href="/">Дизайн</a>
                </li>
                <li class="navigation-list-item pe-5">
                    <a class="nav-link" aria-current="page" href="/projects">Дизайн проекты</a>
                </li>
                <li class="navigation-list-item pe-5">
                    <a class="nav-link" aria-current="page" href="/decor">Декор</a>
                </li>
                <li class="navigation-list-item pe-5">
                    <a class="nav-link" aria-current="page" href="/painting">Картины</a>
                </li>
                @auth
                    <li class="navigation-list-item pe-5">
                        <a class="nav-link" aria-current="page" href="/profile">Личный Кабинет</a>
                    </li>
                @endauth
            </ul>
            @guest
                <a href="login"><button class="navigation-button ms-5 me-1">Войти</button></a>
            @endguest
            @auth
                <a href="logout"><button class="navigation-button ms-5 me-1">Выйти</button></a>
            @endauth
        </nav>
@yield('content')
<footer class="text-center text-lg-start">
    <!-- Section: Links  -->
    <section class="pt-3">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        AKCENT DECOR
                    </h6>
                    <p>
                        ДЕЛАЕМ ДИЗАЙН-ПРОЕКТЫ
                        ДЛЯ ДОМОВ И КВАРТИР
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Услуги
                    </h6>
                    <p>
                        <a href="/design" class="text-reset">Дизайн/Архитектура</a>
                    </p>
                    <p>
                        <a href="/decor" class="text-reset">Декор мероприятий</a>
                    </p>
                    <p>
                        <a href="/painting" class="text-reset">Картины</a>
                    </p>
                    <p>
                        <a href="/projects" class="text-reset">Наши работы</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Социальные сети
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Вконтакте</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Инстаграмм</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Одноклассники</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Телеграм</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Контакты</h6>
                    <p><i class="fas fa-home me-3"></i> Москва, Варфаламейская улица 3Б</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        nHaimova@mail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 7(942) 554-88-05</p>
                    <p><i class="fas fa-phone me-3"></i> + 7(495) 343-98-79</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <hr class="m-0">
    <!-- Copyright -->
    <div class="text-center p-4">
        © 2024 Copyright:
        <a class="text-reset fw-bold">AkcentDecor</a>
    </div>
    <!-- Copyright -->
</footer>
    </div>
</body>
</html>
