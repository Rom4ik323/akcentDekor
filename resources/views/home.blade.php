@extends('layouts.layout')

@section('content')

<div class="main-banner m-auto mt-5 d-flex align-items-end" style="background-image: url({{ asset('/img/banner.png') }}); height: 600px; width: 60%">
    <div class="main-banner-text h-75 text-light m-5 d-flex flex-column justify-content-start">
        <h1 class="mb-3">Дизайн. Архитектура. Декор.<br> Картины.<br>Со скидками к 8 марта</h1>
        <p>Меня зовут Хаимова Нина, добро пожаловать на мой сайт. Здесь вы можете найти услуги по <br> дизайну и архитектуре, декору мероприятий, написанию картин и обучению рисунку.</p>
        <button class="button-46 w-50" role="button">Оставить заявку</button>
    </div>
</div>

<hr class="m-auto w-75 mt-5 mb-5">
<div class="design-arch">
    <h2 class="text-center mt-3">АРХИТЕКТУРА и <br>
        ДИЗАЙН</h2>
    <hr class="m-auto w-25 mt-3 mb-5">
    <div class="design-photos container text-center">
        <div class="design-photos-row row align-items-center">
            <div class="design-photos-col col hover-text-one m-2">
                <figure class="effect-text-three">
                    <img src="{{ asset('/img/2design.png') }}" alt=""/>
                    <figcaption>
                        <h3>Полный дизайн проект</h3>
                        <p>С нуля спроектируем и создадим ремонт вашей мечты</p>
                    </figcaption>
                </figure>
            </div>
            <div class="design-photos-col col">
                <h3 class="m-2">Вы можете заказать полный дизайн проект, частичный дизайн проект, хоум стейджинг, готовые варианты эконом ремонтов</h3>
            </div>
        </div>

        <div class="design-photos-col col m-2">
            <div class="hover-effect-btn design-photos-col col">
                <img style="width: 100%;" src="{{ asset('/img/3design.png') }}" alt="" />
                <h3 class="title">хоум стейджинг</h3>
                <div class="overlay"></div>
                <div class="button"><a href="#">ПОДРОБНЕЕ</a></div>
            </div>
            <div class="design-photos-col">
                <h3 class="m-2">Представляем вам уникальный метод стилизации и декорирования дома, который поможет мгновенно преобразить ваше жилье и сделать его неотразимым для покупателей или арендаторов.</h3>
            </div>
        </div>
    </div>
</div>

<hr class="m-auto w-75 mt-5 mb-5">
<div class="design-arch">
    <h2 class="text-center mt-3">КАРТИНЫ</h2>
    <hr class="m-auto w-25 mt-3 mb-5">
    <div class="pictures d-flex justify-content-around w-75 m-auto" >
        <div class="pictures-item text-center"style="width: 20rem;">
            <img class="pictures-item-img card-img-top p-5" src="{{ asset('/img/picture1.png') }}" alt="">
            <p>Картина Lorem Ipsum</p>
            <p>Цена: 5999$</p>
            <button class="pictures-item-button">Купить</button>
        </div>
        <div class="pictures-item text-center" style="width: 20rem;">
            <img class="pictures-item-img card-img-top p-5" src="{{ asset('/img/picture2.png') }}" alt="">
            <p>Картина Lorem Ipsum</p>
            <p>Цена: 5999$</p>
            <button class="pictures-item-button">Купить</button>
        </div>
        <div class="pictures-item  text-center pb-5" style="width: 20rem;">
            <img class="pictures-item-img card-img-top p-5" src="{{ asset('/img/picture3.png') }}" alt="">
            <p>Картина Lorem Ipsum</p>
            <p>Цена: 5999$</p>
            <button class="pictures-item-button">Купить</button>
        </div>
    </div>
    <div class="container mt-4">
        <h3 class="w-75 m-auto text-center">Вы можете заказать полный дизайн проект, частичный дизайн проект, хоум стейджинг, готовые варианты эконом ремонтов,</h3>
    </div>
    <hr class="m-auto w-75 mt-5 mb-5">

    <div class="dekor">
        <div class="dekor-text w-75 m-auto">
            <h2 class="text-center mt-3">КАРТИНЫ</h2>
            <hr class="m-auto w-25 mt-3 mb-5">
            <h3 class="text-center">Lorem ipsum is placeholder text commonly used in the graphic.</h3>
            <h4 class="text-center">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                LOREM IPSUM GENERATOR</h4>
            <div class=" m-auto dekor-imgs d-flex align-items-center flex-column">
                <img class="dekor-img-item" src="{{ asset('/img/decor1.png') }}"></img>
                <div class="w-75 dekor-img-items mt-5 d-flex justify-content-between">

                    <img class="dekor-img-item" src="{{ asset('/img/decor2.png') }}"></img>
                    <img class="dekor-img-item" src="{{ asset('/img/decor3.png') }}"></img>

                </div>
            </div>
        </div>
    </div>
@endsection
