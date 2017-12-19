@extends('layouts.app')

@section('content')
    <div class="py-5 text-white opaque-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 class="text-gray-dark">New Sub Content Leve Two</h1>
            <p class="lead mb-4">Complete all the fields below to edit the level two sub content</p>
            {!! Form::model($subContentTwoRepository, ['route' => ['subContentTwoRepositories.update', $subContentTwoRepository->id], 'method' => 'patch']) !!}

                @include('sub_content_two_repositories.fields_update')

            {!! Form::close() !!}
        </div>
      </div>
    </div>
</div>
@endsection
