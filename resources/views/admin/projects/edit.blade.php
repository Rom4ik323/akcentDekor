@extends('layouts.admin')
@section('title', 'Изменение проекта')
@section('content')
    <div class="container">
        <form class="m-4" method="POST" action="{{route('project.update', $project)}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputNumber"  class="form-label">Заголовок</label>
                <input type="" value="{{$project->title}}" name="title" class="form-control" id="exampleInputNumber" aria-describedby="NumberHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber"  class="form-label">Площадь</label>
                <input type="" value="{{$project->square}}" name="square" class="form-control" id="exampleInputNumber" aria-describedby="NumberHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber"  class="form-label">Тип</label>
                <input type="" value="{{$project->type}}" name="type" class="form-control" id="exampleInputNumber" aria-describedby="NumberHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber"  class="form-label">Пожелания заказчика</label>
                <input type="" value="{{$project->wishes}}" name="wishes" class="form-control" id="exampleInputNumber" aria-describedby="NumberHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber"  class="form-label">Описание</label>
                <input type="" value="{{$project->description}}" name="description" class="form-control" id="exampleInputNumber" aria-describedby="NumberHelp" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label text-light">Фото главное</label>
                <input name="img_path" value="{{$project->img_path}}" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label text-light">Фото 2</label>
                <input name="img1_path" value="{{$project->img1_path}}" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label text-light">Фото 3</label>
                <input name="img2_path" value="{{$project->img2_path}}" class="form-control" type="file" id="formFile">
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>

@endsection
