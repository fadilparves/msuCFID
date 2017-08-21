@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="text-center">
            Chapter {{$content->chap_num}} - {{$content->title}}
        </h1>
        <div class="row">  
         <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px;margin-right: 105px;
         " href="{!! route('subContentOnes.create', ['content_id' => $content->id]) !!}">Add New Sub Content</a>
        </div>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('contents.subContentOneData');
                </div>
            </div>
        </div>
    </div>
@endsection
