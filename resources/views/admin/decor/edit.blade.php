@extends('layouts.admin')
@section('title', 'Изменение')
@section('content')
    <div class="container">
        <form class="m-4" method="POST" action="{{route('decor.update', $decorExample )}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputNumber"  class="form-label">Название</label>
                <input type="" value="{{$decorExample->title}}" name="title" class="form-control" id="exampleInputNumber" aria-describedby="NumberHelp" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label text-light">Фото</label>
                <input value="{{$decorExample->img_path}}" name="img_path" class="form-control" type="file" id="formFile" >
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>

@endsection
