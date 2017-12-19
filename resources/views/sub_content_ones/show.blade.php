@extends('layouts.app')

@section('content')
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="row" style="padding-left: 20px">
                @include('sub_content_ones.show_fields')
                <!-- <a href="{!! route('subContentOnes.index') !!}" class="btn btn-default">Back</a> -->
            </div>
            <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> List of Sub Content Two 
                                
                            </div>
                        <div class="card-body">
                            @include('sub_content_ones.subContentTwoAll')
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection