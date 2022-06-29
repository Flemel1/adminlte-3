<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Services\VideoService;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoRequest $request, VideoService $service)
    {
        $isInserted = $service->insert($request);
        $response = [];
        $statusCode = 200;

        if ($isInserted) {
            $response = [
                'status_code' => $statusCode,
                'message' => 'Data insert successfully'
            ];
        } else {
            $statusCode = 500;
            $response = [
                'status_code' => $statusCode,
                'message' => 'Data insert not successfully'
            ];
        }

        return back()->with($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data = Video::find($id);
        
        return view('admin.master.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id, VideoService $service)
    {
        $video = Video::find($id);

        $isUpdated = $service->update($request, $video);

        $response = [];
        $statusCode = 200;

        if ($isUpdated) {
            $response = [
                'status_code' => $statusCode,
                'message' => 'Data update successfully'
            ];
        } else {
            $statusCode = 500;
            $response = [
                'status_code' => $statusCode,
                'message' => 'Data update not successfully'
            ];
        }

        return back()->with($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        
    }

    public function videos() {
        $videos = Video::all();

        return view('admin.master.videos', ['videos' => $videos]);
    }
}
