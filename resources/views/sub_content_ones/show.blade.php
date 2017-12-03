@extends('layouts.app')

@section('content')
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="row" style="padding-left: 20px">
                @include('sub_content_ones.show_fields')
                <!-- <a href="{!! route('subContentOnes.index') !!}" class="btn btn-default">Back</a> -->
            </div>
            <div class="row" style="padding-left: 20px; margin-top: 10px;">
                <div class="content">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="row" style="padding-left: 5px">
                                @include('sub_content_ones.subContentTwoAll')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
