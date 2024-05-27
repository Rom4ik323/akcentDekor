@extends('layouts.admin')
@section('title', 'Изменение картины')
@section('content')
    <style>
        footer
    </style>
    <div class="container">
        <form class="m-4" method="POST" action="{{route('picture.update', $picture )}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputNumber"  class="form-label">Название</label>
                <input type="" value="{{$picture->title}}" name="title" class="form-control" id="exampleInputNumber" aria-describedby="NumberHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber"  class="form-label">Цена</label>
                <input type="" value="{{$picture->price}}" name="price" class="form-control" id="exampleInputNumber" aria-describedby="NumberHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber"  class="form-label">Статус</label>
                <input type="" value="{{$picture->status}}" name="status" class="form-control" id="exampleInputNumber" aria-describedby="NumberHelp" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label text-light">Фото</label>
                <input value="{{$picture->img_path}}" name="img_path" class="form-control" type="file" id="formFile" >
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>

@endsection
