<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataStore extends Model
{
    protected $fillable = ['image', 'audio', 'video','document'];

    public static function saveDataInfo($request){
        $data = new DataStore();

        $image     = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $directory = 'blog-images/';
        $image->move($directory, $imageName);

        $data->image        = $directory.$imageName;

        $audio     = $request->file('audio');
        $imageName = $audio->getClientOriginalName();
        $directory = 'blog-audios/';
        $audio->move($directory, $imageName);

        $data->audio        = $directory.$imageName;

        $video     = $request->file('video');
        $imageName = $video->getClientOriginalName();
        $directory = 'blog-videos/';
        $video->move($directory, $imageName);

        $data->video        = $directory.$imageName;

        $document     = $request->file('document');
        $imageName = $document->getClientOriginalName();
        $directory = 'blog-documents/';
        $document->move($directory, $imageName);

        $data->document     = $directory.$imageName;

        $data->save();
    }
}
