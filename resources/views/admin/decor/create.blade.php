@extends('layouts.admin')
@section('title', 'Добавление картины')
@section('content')
    <div class="container">
        <form class="m-4" method="POST" action="{{route('picture.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputNumber"  class="form-label">Название</label>
                <input type="" name="title" class="form-control" id="exampleInputNumber" aria-describedby="NumberHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber"  class="form-label">Цена</label>
                <input type="" name="price" class="form-control" id="exampleInputNumber" aria-describedby="NumberHelp" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label text-light">Фото</label>
                <input name="img_path" class="form-control" type="file" id="formFile" required>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>

@endsection
