@extends('layouts.app')

@section('content')
    <div class="py-5 text-white opaque-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 class="text-gray-dark">New Video</h1>
            <p class="lead mb-4">Add new video to this chapter</p>
            {!! Form::open(array('url'=>'video-upload','files'=>true)) !!}

                @include('videos.fields')

            {!! Form::close() !!}
        </div>
      </div>
    </div>
</div>
@endsection

