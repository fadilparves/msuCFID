<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Repositories\CourseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class CourseController extends AppBaseController
{
    /** @var  CourseRepository */
    private $courseRepository;

    public function __construct(CourseRepository $courseRepo)
    {
        $this->courseRepository = $courseRepo;
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $this->courseRepository->pushCriteria(new RequestCriteria($request));
        $courses = $this->courseRepository->all();

        return view('courses.index')
            ->with('courses', $courses);
    }

    public function create()
    {
        $uid = Auth::id();
        return view('courses.create');
    }

    public function store(CreateCourseRequest $request)
    {
         $input = $request->all();

        if(!is_null(Course::where('courseCode', $input['courseCode'])->first())){
            Flash::error('Course not saved successfully.');
            return redirect(route('courses.index'));
        }

        $course = new Course;
        $course->courseName = $input['courseName'];
        $course->courseCode = $input['courseCode'];
        $course->save();
        Flash::success('Course saved successfully.');
        return redirect(route('courses.index'));
     }

    public function show($id)
    {
        $course = $this->courseRepository->findWithoutFail($id);
        $contents = \App\Models\Content::where('course_id', $id)->get();

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        return view('courses.show')->with('course', $course)->with('contents', $contents);
    }

    public function edit($id)
    {
        $course = $this->courseRepository->findWithoutFail($id);
        $uid = Auth::id();
        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        return view('courses.edit')->with('course', $course);
    }

    public function update($id, UpdateCourseRequest $request)
    {
        $course = $this->courseRepository->findWithoutFail($id);
        if (empty($course)) {
            Flash::error('Course not found');
            return redirect(route('courses.index'));
        }

        $course = $this->courseRepository->update($request->all(), $id);
        Flash::success('Course updated successfully.');
        return redirect(route('courses.index'));
    }

    public function destroy($id)
    {
        $course = $this->courseRepository->findWithoutFail($id);

        if (empty($course)) {
            Flash::error('Course not found');
            return redirect(route('courses.index'));
        }

        $this->courseRepository->delete($id);
        Flash::success('Course deleted successfully.');
        return redirect(route('courses.index'));
    }
}
