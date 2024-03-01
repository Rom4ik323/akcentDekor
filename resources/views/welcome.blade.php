<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('/css/main.css')}}" rel="stylesheet" >
    <script src="/js/jquery-3.6.4.min.js"></script>
    <title>main</title>
</head>
<body>
    <div class="banner" style="background-image: url({{ asset('/img/bg1.jpg') }});">
        <div class="banner-low d-flex flex-column justify-content-between">
            <div class="navbar">
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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">about</a></li>
                        <li><a href="#">blogs</a></li>
                        <li><a href="#">portfolio</a></li>
                        <li><a href="#">contact</a></li>
                    </div>
                </div>
            </div>
            <nav class="navigation" style="width: 80%;">
                <img class="navigation-logo" src="{{ asset('/img/logo.png') }}" alt="">
                <ul class="navigation-list w-75 d-flex text-light pt-3 linking justify-content-end">
                    <li class="navigation-list-item pe-5">
                        <a class="nav-link" aria-current="page" href="">Главная</a>
                    </li>
                    <li class="navigation-list-item pe-5">
                        <a class="nav-link" aria-current="page" href="">Декор</a>
                    </li>
                    <li class="navigation-list-item pe-5">
                        <a class="nav-link" aria-current="page" href="">Картины</a>
                    </li>
                    <li class="navigation-list-item pe-5">
                        <a class="nav-link" aria-current="page" href="">Контакты</a>
                    </li>
                </ul>
                <button class="navigation-button ms-5 me-1">Войти</button>
            </nav>
            <div class="banner-content m-auto text-light" style="width: 80%;">
                <h1>Делаем дизайн-проекты <br> для домов и квартир</h1>
                <div class="banner-content-buttons mt-4">
                    <button class="banner-content-button">Услуги и цены</button>
                    <button class="banner-content-button">Идеи интерьера</button>
                </div>
            </div>
        </div>
    </div>
    <h2 class="project-h">Наши проекты</h2>
    <div class="projects">
            <div class="project-row">
                <div class="project-card-max" style="background-image: url({{ asset('/img/project1.jpg') }});">
                    <div class="project-card-blur">
                        <div class="cart-info">
                            <div class="cart-text">
                                <div class="card-text-blur">
                                    <p>КОТТЕДЖ</p>
                                </div>
                            </div>
                            <div class="cart-text">
                                <div class="card-text-blur">
                                    <p>89 М. КВ.</p>
                                </div>
                            </div>
                        </div>
                        <button>перейти</button>
                    </div>
                </div>
                <div class="project-card-minis">
                   <div class="project-card-mini" style="background-image: url({{ asset('/img/project-mini1.jpg') }});">
                       <div class="project-card-blur">
                           <div class="cart-info">
                               <div class="cart-text">
                                   <div class="card-text-blur">
                                       <p>КВАРТИРА</p>
                                   </div>
                               </div>
                               <div class="cart-text">
                                   <div class="card-text-blur">
                                       <p>100 М. КВ.</p>
                                   </div>
                               </div>
                           </div>
                           <button>перейти</button>
                       </div>
                   </div>
                    <div class="project-card-mini" style="background-image: url({{ asset('/img/project-mini2.jpg') }});">
                        <div class="project-card-blur">
                            <div class="cart-info">
                                    <div class="cart-text">
                                        <div class="card-text-blur">
                                            <p>КВАРТИРА</p>
                                        </div>
                                    </div>
                                    <div class="cart-text">
                                        <div class="card-text-blur">
                                            <p>65 М. КВ.</p>
                                        </div>
                                    </div>
                                </div>
                            <button>перейти</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-row1">
                <div class="project-card-promax" style="background-image: url({{ asset('/img/project-max.jpg') }});">
                    <div class="project-card-blur">
                        <div class="cart-info">
                            <div class="cart-text">
                                <div class="card-text-blur">
                                    <p>КВАРТИРА</p>
                                </div>
                            </div>
                            <div class="cart-text">
                                <div class="card-text-blur">
                                    <p>65 М. КВ.</p>
                                </div>
                            </div>
                        </div>
                        <button>перейти</button>
                    </div>
                </div>
                <div class="project-card-mini1" style="background-image: url({{ asset('/img/project-mini3.jpg') }});">
                    <div class="project-card-blur">
                        <div class="cart-info">
                            <div class="cart-text">
                                <div class="card-text-blur">
                                    <p>КВАРА</p>
                                </div>
                            </div>
                            <div class="cart-text">
                                <div class="card-text-blur">
                                    <p>65 М. КВ.</p>
                                </div>
                            </div>
                        </div>
                        <button>перейти</button>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
