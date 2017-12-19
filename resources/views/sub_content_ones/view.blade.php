@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="box-body">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $subContentOne->sub_number !!} - {!! $subContentOne->title !!}</div>
                <!-- Body Field -->
                <div class="panel-body">
                    <p>{!! $subContentOne->body !!}</p>
                    @foreach($subContentTwoRepositories as $sbt)
                        <h4>{!! $sbt -> sub_number !!} - {!! $sbt -> title !!}</h4>
                        <p>{!! $sbt->body !!}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection