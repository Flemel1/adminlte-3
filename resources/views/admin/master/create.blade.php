@extends('admin.layouts.base')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Upload Video</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Upload Video</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Upload Video Form</h3>
                            </div>
                            <form id="createForm" method="POST" action="{{ route('admin.store') }}"
                                novalidate="novalidate" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="video-name-input">Video name</label>
                                        <input type="text" class="form-control" id="video-name-input" value="{{ old('name') }}" name="name"
                                            placeholder="Enter Your Video Name">
                                        @error('name')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="video-description-input">Description</label>
                                        <textarea class="form-control" id="video-description-input" rows="3" placeholder="Enter Your Video Description..."
                                            name="description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="video-file-input">Video input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="video-file-input"
                                                    name="video" value="{{ old('video') }}">
                                                <label class="custom-file-label" for="video-file-input">Choose file</label>
                                            </div>
                                        </div>
                                        @error('video')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="video-thumbnail-input">Thumbnail input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="video-thumbnail-input"
                                                    name="thumbnail" value="{{ old('thumbnail') }}">
                                                <label class="custom-file-label" for="video-thumbnail-input">Choose
                                                    file</label>
                                            </div>

                                        </div>
                                        @error('thumbnail')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>

    </div>
@endsection
