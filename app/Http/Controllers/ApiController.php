<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Content;
use App\Models\subContentOne;
use App\Models\subContentTwoRepository;
use App\Video;

class ApiController extends Controller
{
    public function getAllCourse()
    {
    	$courses = Course::all();

    	return response()->json($courses, 200);
    }

    public function getContent($id)
    {
    	$contents = Content::where('course_id', $id)->get();

    	return response()->json($contents, 200);
    }

    public function listOfSubOne($id)
    {
    	$subsOne = subContentOne::where('content_id', $id)->get();

    	return response()->json($subsOne, 200);
    }

    public function getSubOneContent($id)
    {
    	$subOne = subContentOne::find($id);

    	if($subOne != null)
    	{
    		return response()->json($subOne, 200);
    	}
    	else
    	{
    		return response()->json("No data found", 400);
    	}
    }

    public function listOfSubTwo($id)
    {
    	$subsTwo = subContentTwoRepository::where('sub_content_one_id', $id)->get();

    	return response()->json($subsTwo, 200);
    }

    public function getSubTwoContent($id)
    {
    	$subTwo = subContentTwoRepository::find($id);

    	if($subTwo != null)
    	{
    		return response()->json($subTwo, 200);
    	}
    	else
    	{
    		return response()->json("No data found", 400);
    	}
    }

    public function listOfVideo($id)
    {
    	$videos = Video::where('content_id', $id)->get();

    	return response()->json($videos, 200);
    }

    public function getVideo($id)
    {
    	$video = Video::find($id);

    	if ($video != null) 
    	{
    		return response()->json($video, 200);
    	}
    	else
    	{
    		return response()->json("No Data For This ID", 400);
    	}
    }
}
