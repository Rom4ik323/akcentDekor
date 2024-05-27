@extends('layouts.layout')
@section('title', 'Личный кабинет')
@section('content')
    <div class="container mb-5">
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
        <h2 class="project-h2 mt-5 mb-5">Ваши заказы:</h2>
        <div class="row">
        @foreach($design_orders as $design_order)
            <ul class="list-group w-25 mb-5">
                <li class="list-group-item">Тип помещения: {{$design_order->type}}</li>
                <li class="list-group-item">Номер телефона: {{$design_order->number}}</li>
                <li class="list-group-item">Имя: {{$design_order->name}}</li>
                <li class="list-group-item">Услуга: {{$design_order->service}}</li>
                <li class="list-group-item">Площадь помещения: {{$design_order->square}}</li>
                <li class="list-group-item">Комментарий: {{$design_order->comment}}</li>
                <li class="list-group-item">Статус: {{$design_order->status}}</li>
            </ul>
        @endforeach
        @foreach($picture_orders as $picture_order)
            <ul class="list-group w-25 mb-5">
                <li class="list-group-item">Номер телефона: {{$picture_order->number}}</li>
                <li class="list-group-item">Имя: {{$picture_order->name}}</li>
                <li class="list-group-item">Услуга: {{$picture_order->service}}</li>
                <li class="list-group-item">Комментарий: {{$picture_order->comment}}</li>
                <li class="list-group-item">Статус: {{$picture_order->status}}</li>
            </ul>
        @endforeach
            @foreach($decor_orders as $decor_order)
                <ul class="list-group w-25 mb-5">
                    <li class="list-group-item">Номер телефона: {{$decor_order->number}}</li>
                    <li class="list-group-item">Имя: {{$decor_order->name}}</li>
                    <li class="list-group-item">Услуга: {{$decor_order->service}}</li>
                    <li class="list-group-item">Комментарий: {{$decor_order->comment}}</li>
                    <li class="list-group-item">Статус: {{$decor_order->status}}</li>
                </ul>
            @endforeach
        </div>
    </div>

@endsection
