<div class="container">
    <div class="row">
        <div class="box-body">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $subContentOne->sub_number !!} - {!! $subContentOne->title !!}</div>
                <!-- Body Field -->
                <div class="form-group">
                    <p>{!! $subContentOne->body !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{!! route('contents.index', [$subContentOne->course_id]) !!}" class="btn btn-default">Back</a>
        </div>
    </div>
</div>

