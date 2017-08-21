@extends('layouts.app')

@section('content')
    <section class="content-header text-center">
        <h1>
            {!! $course->courseCode !!} - {!! $course->courseName !!}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row text-center" style="padding-left: 20px">
                    @include('courses.indexContent')
                    <a href="{!! route('courses.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
