@extends('layouts.admin')
@section('title', 'Проекты')
@section('content')
    <h1 class="m-4 text-center">Управление проектами</h1>
    <div class="container">
        <a href="{{route('project.create')}}" class="btn btn-primary me-5">Создать</a>
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
        @foreach($projects as $project)
            <ul class="list-group mb-3 w-50 m-auto">
                <li class="list-group-item">Заголовок: {{$project->title}}</li>
                <li class="list-group-item">Площадь: {{$project->square}}</li>
                <li class="list-group-item">Тип: {{$project->type}}</li>
                <li class="list-group-item">Пожелания: {{$project->wishes}}</li>
                <li class="list-group-item">Описание: {{$project->description}}</li>
                <li class="list-group-item"><img style="width: 600px;" src="{{$project->img_path}}"></li>
                <li class="list-group-item"><img style="width: 600px;" src="{{$project->img1_path}}"></li>
                <li class="list-group-item"><img style="width: 600px;" src="{{$project->img2_path}}"></li>
                <li class="list-group-item"><a href="{{route('project.edit', $project)}}" class="btn btn-secondary me-5">Изменить</a>
                    <form method="POST" action="{{route('project.destroy', $project)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-light mt-1">Удалить</button>
                    </form>
            </ul>
        @endforeach
        </div>
    </div>
@endsection
