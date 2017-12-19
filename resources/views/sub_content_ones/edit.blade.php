@extends('layouts.app')

@section('content')
    <div class="py-5 text-white opaque-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 class="text-gray-dark">Edit Sub Content Level One</h1>
            <p class="lead mb-4">Complete all the fields below to edit the first level sub content</p>
            {!! Form::model($subContentOne, ['route' => ['subContentOnes.update', $subContentOne->id], 'method' => 'patch']) !!}

              @include('sub_content_ones.fields_update')

           {!! Form::close() !!}
        </div>
      </div>
    </div>
</div>
@endsection
