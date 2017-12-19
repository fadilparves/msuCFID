@extends('layouts.app')

@section('content')
<div class="py-5 text-white opaque-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 class="text-gray-dark">New Course</h1>
            <p class="lead mb-4">Complete all the fields below to create a new course</p>
           {!! Form::open(['route' => 'courses.store']) !!}

                @include('courses.fields')

            {!! Form::close() !!}
        </div>
      </div>
    </div>
</div>
@endsection
