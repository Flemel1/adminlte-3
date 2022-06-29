@extends('layouts.app')

@section('content')
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-8 sm:px-6 lg:max-w-7xl lg:px-8">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-8">

                    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        @foreach ($videos as $video)
                            <div class="group relative">
                                <div
                                    class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                    <img src="{{ asset('storage' . Str::substr($video->thumbnail, 6)) }}"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                                </div>
                                <div class="mt-4">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            Title: {{ $video->name }}
                                        </h3>
                                        <h4 class="text-sm text-gray-700">
                                            Description: {{ $video->description }}
                                        </h4>
                                        <br>
                                        <div
                                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white text-center py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                            <a href="{{ route('home.download', ['id' => $video->id]) }}">Download
                                                Video</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
