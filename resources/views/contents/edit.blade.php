@extends('layouts.app')

@section('content')
    <div class="py-5 text-white opaque-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
              <h1 class="text-gray-dark">Edit Content</h1>
              <p class="lead mb-4">Complete all the fields below to edit a chapter</p>
              {!! Form::model($content, ['route' => ['contents.update', $content->id], 'method' => 'patch']) !!}

                @include('contents.fieldsedit')

              {!! Form::close() !!}
          </div>
        </div>
    </div>
</div>
@endsection
