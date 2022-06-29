@extends('admin.layouts.base')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Delete Video</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Delete Video</li>
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
                                <div class="card mb-2 bg-gradient-dark">
                                    <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <h5 class="card-title text-primary text-white">Card Title</h5>
                                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit sed do eiusmod tempor.</p>
                                        <a href="#" class="text-white">Last update 2 mins ago</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-block btn-danger btn-lg">Delete</button>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="card mb-2 bg-gradient-dark">
                                    <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <h5 class="card-title text-primary text-white">Card Title</h5>
                                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit sed do eiusmod tempor.</p>
                                        <a href="#" class="text-white">Last update 2 mins ago</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-block btn-danger btn-lg">Delete</button>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="card mb-2 bg-gradient-dark">
                                    <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <h5 class="card-title text-primary text-white">Card Title</h5>
                                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit sed do eiusmod tempor.</p>
                                        <a href="#" class="text-white">Last update 2 mins ago</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-block btn-danger btn-lg">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
