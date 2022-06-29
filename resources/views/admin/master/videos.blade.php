@extends('admin.layouts.base')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>List Video</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">List Video</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-success">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                @foreach ($videos as $video)
                                    <div class="card mb-2 bg-gradient-dark">
                                        <img class="card-img-top"
                                            src="{{ asset('storage' . Str::substr($video->thumbnail, 6)) }}"
                                            alt="Dist Photo 1">
                                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                                            <h5 class="card-title text-primary text-white">{{ $video->name }}</h5>
                                            <p class="card-text text-white pb-2 pt-1">{{ $video->description }}</p>
                                            <a href="#" class="text-white">{{ $video->created_at }}</a>
                                        </div>
                                    </div>
                                    <a href="{{ route('admin.edit', ['admin' => $video->id]) }}"
                                        class="btn btn-block btn-dark btn-lg">Edit</a>
                                    <a href="{{ route('admin.destroy', ['admin' => $video->id]) }}"
                                        class="btn btn-block btn-danger btn-lg">Delete</a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
