<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContentRequest;
use App\Http\Requests\UpdateContentRequest;
use App\Repositories\ContentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth;

class ContentController extends AppBaseController
{
    /** @var  ContentRepository */
    private $contentRepository;

    public function __construct(ContentRepository $contentRepo)
    {
        $this->contentRepository = $contentRepo;
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $this->contentRepository->pushCriteria(new RequestCriteria($request));
        $contents = $this->contentRepository->all();

        return view('contents.index')
            ->with('contents', $contents);
    }

    public function create($id)
    {
        // $courses = \App\Models\Course::pluck('courseName', 'id');
        $last_course_number = \App\Models\Content::where('course_id', $id)->orderBy('created_at', 'desc')->first();
        return view('contents.create', compact('last_course_number', $last_course_number));
    }

    public function store(CreateContentRequest $request)
    {
        $input = $request->all();

        $content = $this->contentRepository->create($input);

        Flash::success('Content saved successfully.');

        return redirect()->route('courses.show', ['id' => $content->course_id]);

        // return redirect('/courses/{$course_id}');
    }

    public function show($id)
    {
        $content = $this->contentRepository->findWithoutFail($id);
        $subContentOnes = \App\Models\subContentOne::where('content_id', $id)->get();
        $videos = \App\Models\Video::where('content_id', $id)->get();

        if (empty($content)) {
            Flash::error('Content not found');

            return redirect(route('contents.index'));
        }

        return view('contents.show')->with('content', $content)->with('subContentOnes', $subContentOnes)->with('videos', $videos);
    }

    /**
     * Show the form for editing the specified Content.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $content = $this->contentRepository->findWithoutFail($id);
        //$last_course_number = \App\Models\Content::where('course_id', $id)->orderBy('created_at', 'desc')->first();
        if (empty($content)) {
            Flash::error('Content not found');

            return redirect(route('contents.index'));
        }

        return view('contents.edit')->with('content', $content);
    }

    public function update($id, UpdateContentRequest $request)
    {
        $content = $this->contentRepository->findWithoutFail($id);

        if (empty($content)) {
            Flash::error('Content not found');

            return redirect(route('contents.index'));
        }

        $content = $this->contentRepository->update($request->all(), $id);
        Flash::success('Content updated successfully.');
        return redirect()->route('courses.show', ['id' => $content->course_id]);
    }

    public function destroy($id)
    {
        $content = $this->contentRepository->findWithoutFail($id);

        if (empty($content)) {
            Flash::error('Content not found');

            return redirect(route('contents.index'));
        }

        $this->contentRepository->delete($id);
        Flash::success('Content deleted successfully.');
        return redirect()->route('courses.show', ['id' => $content->course_id]);
    }
}
