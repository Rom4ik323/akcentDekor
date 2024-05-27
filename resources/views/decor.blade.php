@extends('layouts.layout')
@section('title', 'Декор')
@section('content')
    <div class="painting-banner" style="background-image: url({{ asset('/img/bg3.jpg') }});">
        <div class="blur-banner">
        <h2>Декор мероприятий</h2>
    </div>
    </div>
    <div style="background-color: #252525" class="w-100 learning">
        <h2>Наши услуги</h2>
        <div class="row justify-content-center m-auto pb-5" style="width: 80%">
            <div class="card m-4" style="width: 28rem;">
                <img src="{{ asset('/img/decor1.jpg') }}" class="card-img-top decor-img" style="width: 100%!important;" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Декор свадеб</h5>
                    <div class="usl-item mt-4 mb-3">
                        <p class="card-text text-center p-2">Стиль: романтичный, современный, винтажный или другой</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Разделение локации на зоны: церемония, приём гостей, банкет, танцпол</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Основные декоративные компоненты, цветовая гамма и стиль для каждой зоны</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Ленты и банты часто используют для украшения свадебных автомобилей, арок, дверных проёмов.</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Тюль, атлас и другие ткани для драпировки мебели и создания арок</p>
                    </div>
                    <a href="/decor/order"><button class="card-btn">заказать</button></a>
                </div>
            </div>
            <div class="card m-4" style="width: 28rem;">
                <img src="{{ asset('/img/decor2.jpg') }}" class="card-img-top decor-img" style="width: 100%!important;" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Декор корпаративов</h5>
                    <div class="usl-item mt-4 mb-3">
                        <p class="card-text text-center p-2">Оформление зала: драпировка стен и потолков тканью, установка конструкций и фона.</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Столы и стулья: использование скатертей, чехлов для стульев, юбок на столы и скатертей.</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Флористический декор: авторские композиции из цветов, букеты на столах, декоративные растения.</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Воздушные шары: оформление потолка, создание арок, колонн и шатров, гирлянды из шаров.</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Световой дизайн: заливочный свет, световые пушки, динамические светильники.</p>
                    </div>
                    <a href="/decor/order"><button class="card-btn">заказать</button></a>
                </div>
            </div>
            <div class="card m-4" style="width: 28rem;">
                <img src="{{ asset('/img/decor3.jpg') }}" class="card-img-top decor-img" style="width: 100%!important;" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Декор торговых центров</h5>
                    <div class="usl-item mt-4 mb-3">
                        <p class="card-text text-center p-2">Светодиодные фигуры — яркие и праздничные, создают атмосферу и привлекают внимание.</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Скульптуры из пенопласта — используются для фотозон и акций, добавляют индивидуальность.</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Брендированный декор — элементы в цветах фирменного стиля или с логотипом компании.</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Пластиковые декорации — бюджетный вариант декора, легко монтируется и транспортируется.</p>
                    </div>
                    <div class="usl-item mb-3">
                        <p class="card-text text-center p-2">Ёлочные игрушки — крупные размеры и необычные дизайны делают их отличным элементом декора.</p>
                    </div>
                    <a href="/decor/order"><button class="card-btn">заказать</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="learning">
        <h2 class="mb-4" style="color: #252525">Примеры работ</h2>
        <div class="decor-ex row mb-4 justify-content-center m-auto" style="width: 80%">
            @foreach($decor_examples as $decor_example)
                <img src="{{$decor_example->img_path}}" alt="">
            @endforeach
        </div>
    </div>


@endsection
