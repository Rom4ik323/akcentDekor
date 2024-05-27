@extends('layouts.admin')
@section('title', 'Картины')
@section('content')

@endsection
    <h1 class="m-4 text-center">Управление картинами</h1>
    <div class="container">
        <a href="{{route('picture.create')}}" class="btn btn-primary me-5">Создать</a>
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
        @foreach($pictures as $picture)
            <ul class="list-group mb-3 w-50 m-auto">
                <li class="list-group-item">Картинна: {{$picture->title}}</li>
                <li class="list-group-item">Цена: {{$picture->price}}</li>
                <li class="list-group-item">Статус: {{$picture->status}}</li>
                <li class="list-group-item"><img style="width: 600px;" src="{{$picture->img_path}}"></li>
                <li class="list-group-item"><a href="{{route('picture.edit', $picture)}}" class="btn btn-secondary me-5">Изменить</a>
                    <form method="POST" action="{{route('picture.destroy', $picture)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-light mt-1">Удалить</button>
                    </form>
            </ul>
        @endforeach
        </div>
    </div>
@endsection
