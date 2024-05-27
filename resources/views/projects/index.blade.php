@extends('layouts.layout')
@section('title', 'Проекты')
@section('content')
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
    <div class="painting-banner mb-4" style="background-image: url({{ asset('/img/bg-projects.jpg') }});">
        <div class="blur-banner">
            <h2 style="font-size: 44px!important;">ВСЕ РЕАЛИЗОВАННЫЕ ПРОЕКТЫ СТУДИИ AkcentDecor</h2>
        </div>
    </div>
    <div class="container">
        @foreach($projects as $project)
            <div class="m-auto mb-3 project-card-max" style="background-image: url({{$project->img_path}});">
                <div class="project-card-blur">
                    <div class="cart-info">
                        <div class="cart-text">
                            <div class="card-text-blur">
                                <p>{{$project->type}}</p>
                            </div>
                        </div>
                        <div class="cart-text">
                            <div class="card-text-blur">
                                <p>{{$project->square}} М. КВ.</p>
                            </div>
                        </div>
                    </div>
                    <a style="text-decoration: none" class="d-flex justify-content-center" href="{{route('project.show', $project)}}"><button class="">перейти</button></a>
                </div>
            </div>
        @endforeach


    </div>
    </div>
@endsection
