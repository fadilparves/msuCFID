<!-- Id Field -->
<!-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $content->id !!}</p>
</div> -->

<!-- Title Field -->
<!-- <div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $content->title !!}</p>
</div> -->
<div class="container">
    <div class="row">
        <div class="box-body">
            <div class="panel panel-default">
                <div class="panel-heading">Title</div>
                <!-- Body Field -->
                <div class="form-group">
                    <p>{!! $content->title !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @include('contents.subContentOneData');
        </div>
        <div class="text-center">
            <a href="{!! route('contents.index') !!}" class="btn btn-default">Back</a>
        </div>
    </div>
</div>

<!-- Created At Field -->
<!-- <div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $content->created_at !!}</p>
</div>

Updated At Field
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $content->updated_at !!}</p>
</div> -->