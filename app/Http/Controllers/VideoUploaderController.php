<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Video;

class VideoUploaderController extends Controller
{
    public function create()
    {
    	return view('videos.create');
    }

    public function store(Request $request)
    {
    	$contentID = $request->content_id;
    	$video = $request->file('video');
    	$videoName = $video->getClientOriginalName();
    	$fileExtension = $video->getClientOriginalExtension();
    	// $videoName = time().'.'.$request->image->getClientOriginalExtension();
    	$t = Storage::disk('local')->put($videoName, file_get_contents($video), 'public');
    	$path = Storage::disk('local')->url($videoName);

    	$video = new Video;
    	$video->file_path = $path;
    	$video->video_mime = $fileExtension;
    	$video->content_id = $contentID;
    	$video->save();

    	return redirect()->route('contents.show', ['id' => $video->content_id]);

    }

    public function show($id)
    {
    	$video = Video::find($id);
    	$path = $video->file_path;
    	$name = explode("/", $path);
    	// $path = Storage::url($name);
    	$mime = 'video/'.$video->video_mime;

    	return view('videos.player')->with('path', $path)->with('mime', $mime);
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();

        return redirect()->route('contents.show', ['id' => $video->content_id]);
    }
}
