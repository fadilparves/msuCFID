@extends('layouts.app')

@section('content')
    <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-light">Chapter {{$content->chap_num}} - {{$content->title}}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header"> List of Sub Content One 
            <a class="btn btn-primary pull-right"; href="{!! route('subContentOnes.create', ['content_id' => $content->id]) !!}">Add New Sub Content</a>
            </div>
            <div class="card-body">
              @include('contents.subContentOneData')
            </div>
        </div>
        </div>
        </div>
    </div>
    </div>

    <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header"> List of Sub Content One Videos 
                <a class="btn btn-primary pull-right" href="{!! route('video.upload', ['content_id' => $content->id]) !!}">Add New Video</a>
            </div>
            <div class="card-body">
              @include('contents.videos')
            </div>
        </div>
        </div>
        </div>
    </div>
    </div>

@endsection

