<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('/css/main.css')}}" rel="stylesheet" >
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('/img/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <script src="/js/jquery-3.6.4.min.js"></script>
    <title>Дизайн</title>
</head>
<body>
    <div class="banner" style="background-image: url({{ asset('/img/bg1.jpg') }});">
        <div class="banner-low d-flex flex-column justify-content-between">
            @extends('layouts.layout1')

            @section('content')
                <div class="container w-50 mt-2">
                        @if (\Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <ul>
                                        <li>{!! \Session::get('success') !!}</li>
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                </div>

            <div class="banner-content m-auto text-light" style="width: 80%;">
                <h1>Делаем дизайн-проекты <br> для домов и квартир</h1>
                <div class="banner-content-buttons mt-4">
                    <a href="/projects"><button class="banner-content-button">Наши проеты</button></a>
                    <a href="/order"><button class="banner-content-button">Сделать заказ</button></a>
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
                                    <p>КВАРтирА</p>
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
    <div class="projects-button">
        <a href="/projects"><button>все проекты</button></a>
    </div>
    <h2 class="project-h">Мы создаем интерьеры, <br>в которых удобно жить</h2>
    <div class="advantages">
        <div class="advantages-items">
            <div class="advantages-item" style="background-image: url({{ asset('/img/advantages1.png') }});">
                <div class="advantages-blur">
                    <div class="icons">
                        <img src="{{ asset('/img/icon1.png') }}" alt="">
                    </div>
                    <div class="advantages-text">
                        <p>Функциональность и эргономика для нас не просто слова</p>
                    </div>
                </div>
            </div>
            <div class="advantages-item" style="background-image: url({{ asset('/img/advantages2.png') }});">
                <div class="advantages-blur">
                    <div class="icons">
                        <img src="{{ asset('/img/icon2.png') }}" alt="">
                        <img src="{{ asset('/img/icon3.png') }}" alt="">
                        <img src="{{ asset('/img/icon4.png') }}" alt="">
                        <img src="{{ asset('/img/icon5.png') }}" alt="">
                    </div>
                    <div class="advantages-text">
                        <p>Учитываем все, до мелочей: электрику, вентиляцию, шумоизоляцию и освещение</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="advantages-items">
            <div class="advantages-item" style="background-image: url({{ asset('/img/advantages3.png') }});">
                <div class="advantages-blur">
                    <div class="icons">
                        <img src="{{ asset('/img/icon2.png') }}" alt="">
                    </div>
                    <div class="advantages-text">
                        <p>Никогда не упорствуем: интерьер должен отражать вкус и стиль хозяина</p>
                    </div>
                </div>
            </div>
            <div class="advantages-item" style="background-image: url({{ asset('/img/advantages4.png') }});">
                <div class="advantages-blur">
                    <div class="icons">
                        <img src="{{ asset('/img/icon6.png') }}" alt="">
                    </div>
                    <div class="advantages-text">
                        <p>Проектируем, используя реальные материалы, помогаем купить выгодно</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form" style="background-image: url({{ asset('/img/bg2.jpg') }});">
        <div class="form-help">
            <form action="{{route('app.store')}}" method="POST">
                @csrf
                <h2 class="pt-4 form-h">НАПИСАТЬ НАМ</h2>
                <div class="form-inputs">
                    <input name="name" placeholder="Имя" class="form-input mb-2">
                    <input name="number" placeholder="+7 (999) 000-00-00" class="form-input mb-2" data-phone-pattern required>
                    <input name="comment" placeholder="Комментарий" class="form-input mb-2">
                    <input style="display: none!important;" name="service" value="Дизайн">
                    <button type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
