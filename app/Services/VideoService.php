<?php

namespace App\Services;

use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoService 
{
    public function insert(VideoRequest $data)
    {
        $video = new Video;
        
        $video->name = $data->name;
        $video->description = $data->description;
        $video->video = Storage::putFile('public/videos', $data->file('video'));
        $video->thumbnail = Storage::putFile('public/thumbnails', $data->file('thumbnail'));

        $isInserted = $video->save();

        return $isInserted;
    }

    public function update(VideoRequest $request, Video $data)
    {
        $data->name = $request->name;
        $data->description = $request->description;
        $data->video = Storage::putFile('public/videos', $request->file('video'));
        $data->thumbnail = Storage::putFile('public/thumbnails', $request->file('thumbnail'));

        $isUpdated = $data->save();

        return $isUpdated;
    }
}
