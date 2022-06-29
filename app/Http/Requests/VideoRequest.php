<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:10',
            'description' => 'required|min:30',
            'video' => 'required|mimetypes:video/mkv,video/mp4',
            'thumbnail' => 'required|mimetypes:image/png,image/jpg,image/jpeg'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter a name of your video',
            'name.min' => 'Your name video too short',
            'description.required' => 'Please enter a description of your video',
            'description.min' => 'Your description video too short',
            'video.name' => 'Please upload your video',
            'video.mimetypes' => 'Extension video must be MP4/MKV',
            'thumbnail.required' => 'Please upload your video thumbnail',
            'thumbnail.mimetypes' => 'Extension thumbnail must be PNG, JPG, JPEG'
        ];
    }
}
