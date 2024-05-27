@extends('layouts.admin')
@section('title', 'Заказы на картины')
@section('content')
<h1 class="text-center m-5">Заказы на картины</h1>
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
<div class="container">
    <div class="row">
        @foreach($picture_orders as $picture_order)
            <ul class="list-group w-25 mb-5">
                <li class="list-group-item">Номер телефона: {{$picture_order->number}}</li>
                <li class="list-group-item">Имя: {{$picture_order->name}}</li>
                <li class="list-group-item">Услуга: {{$picture_order->service}}</li>
                <li class="list-group-item">Комментарий: {{$picture_order->comment}}</li>
                <li class="list-group-item">Статус: {{$picture_order->status}}</li>
                <li class="list-group-item">
                    <form method="post" action="{{route('picture.order.edit', $picture_order)}}">
                        @csrf
                        <select name="status" class="form-select" aria-label="Default select example">
                            <option selected>Сменить статус</option>
                            <option value="В обработке">В обработке</option>
                            <option value="Выполняется">Выполняется</option>
                            <option value="Выполнен">Выполнен</option>
                            <option value="Отменен">Отменен</option>
                        </select>
                        <button class="mt-2 btn btn-success" type="submit">Изменить</button>
                    </form>
                </li>
            </ul>
        @endforeach
    </div>
</div>
@endsection
