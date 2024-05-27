@extends('layouts.layout')
@section('title', 'Проект студии AkcentDecor')
@section('content')
    <div class="w-75 show m-auto d-flex">

        <div id="carouselExample" class="carousel slide w-50">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{$project->img_path}}" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{$project->img1_path}}" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{$project->img2_path}}"alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="text d-flex justify-content-center flex-column align-content-center w-100">
            <h2 class="ms-5 project-h2">{{$project->title}}</h2>
            <h3 class="ms-5">Пожелания заказчика</h3>
            <p class="ms-5">{{$project->wishes}}</p>
            <h3 class="ms-5">Комментарий дизайнера</h3>
            <p class="ms-5">{{$project->description}}</p>
            <a href="/order"><button class="ms-5 mb-5">Хочу так же</button></a>
        </div>
    </div>
@endsection
