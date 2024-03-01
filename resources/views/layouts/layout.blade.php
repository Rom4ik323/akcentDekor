<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link href="{{asset('/css/main.css')}}" rel="stylesheet" >
    <script src="/js/jquery-3.6.4.min.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg border-bottom border-body">
    <div class="container">
        <a class="navbar-brand" href="/"><img style="width: 50px; height: 50px" class="img-fluid" src="{{ asset('/img/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex justify-content-center w-100">
                <ul class="navbar-nav mb-2 mb-lg-0 linking w w-50 justify-content-around text-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/about">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/uslugi">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/contacts">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

@yield('content')
<hr>
<!-- Footer -->
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
                        <i class="fas fa-gem me-3"></i>ИП Хаимова Нина
                    </h6>
                    <p>
                        Меня зовут Хаимова Нина, добро пожаловать на мой сайт. Здесь вы можете найти услуги по
                        дизайну и архитектуре, декору мероприятий, написанию картин и обучению рисунку.
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
                        <a href="#!" class="text-reset">Дизайн/Архитектура</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Декор мероприятий</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Картины</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Обучение рисунку</a>
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
                    <p><i class="fas fa-home me-3"></i> Москва, Чушпанская улица стр. 37б</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        nHaimova@mail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 942 554 88 05</p>
                    <p><i class="fas fa-phone me-3"></i> + 495 343 98 79</p>
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
        <a class="text-reset fw-bold">дадая</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="/js/main.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
