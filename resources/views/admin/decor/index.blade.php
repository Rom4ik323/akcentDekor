@extends('layouts.admin')
@section('title', 'декор')
@section('content')
    <h1 class="m-4 text-center">Управление декор-портфолио</h1>
    <div class="container">
        <a href="{{route('decor.create')}}" class="btn btn-primary me-5">Создать</a>
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
        @foreach($decorExamples as $decorExample)
            <ul class="list-group mb-3 w-50 m-auto">
                <li class="list-group-item">Название: {{$decorExample->title}}</li>
                <li class="list-group-item">Статус: {{$decorExample->status}}</li>
                <li class="list-group-item"><img style="width: 600px;" src="{{$decorExample->img_path}}"></li>
                <li class="list-group-item"><a href="{{route('decor.edit', $decorExample)}}" class="btn btn-secondary me-5">Изменить</a>
                    <form method="POST" action="{{route('decor.destroy', $decorExample)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-light mt-1">Удалить</button>
                    </form>
            </ul>
        @endforeach
        </div>
    </div>
@endsection
