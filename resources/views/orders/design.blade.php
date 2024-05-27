@extends('layouts.layout')
@section('title', 'Заказ')
@section('content')
    <style>
        input{
            width: 50vw!important;
        }
        select{
            width: 50vw!important;
            height: 50px;
        }
    </style>



<h1 class="text-center form-h mt-5 mb-4">Оформление заказа на дизайн проект</h1>
    <div class="d-flex justify-content-center mt-5">
        <form action="{{route('design.order.store')}}" method="POST">
            @csrf
            <div class="form-inputs d-flex flex-column">
                <select name="type" id="service" class="form-input mb-4 m-auto" required aria-label="Default select example">
                    <option selected>Выберете тип помещения</option>
                    <option value="Квартира">Квартира</option>
                    <option value="Офис">Офис</option>
                    <option value="Пентхаус">Пентхаус</option>
                    <option value="Коттедж">Коттедж</option>
                    <option value="Усадьба">Усадьба</option>
                    <option value="Загородный дом">Загородный дом</option>
                </select>
                <input type="number" name="square" oninput="raschitat()" id="shirina" placeholder="Площадь" class="form-input mb-4 m-auto" required>
                <select name="service" id="service" class="form-input mb-4 m-auto" required aria-label="Default select example">
                    <option selected>Выберете услугу</option>
                    <option value="Планировочное решение">Планировочное решение</option>
                    <option value="Дизайн-проект эскизный">Дизайн-проект эскизный</option>
                    <option value="Дизайн-проект полный">Дизайн-проект полный</option>
                </select>
                <input name="name" value="{{$user->name}}" id="name" placeholder="Имя" class="form-input mb-4 m-auto">
                <input name="number" value="{{$user->number}}" data-phone-pattern placeholder="+7 (999) 000-00-00" class="form-input mb-3 m-auto" data-phone-pattern required>
                <input name="comment" id="price" placeholder="Комментарий" class="form-input mb-4 m-auto">



                {{--                    <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
                {{--                    <label class="form-check-label" for="exampleCheck1">Я даю свое согласие на обработку моих персональных данных, на условиях и в соответствии с целями, указанными в Политике обработки персональных данных</label>--}}
                <button class="m-auto mb-5" type="submit">Оформить</button>
            </div>
        </form>
    </div>

@endsection
