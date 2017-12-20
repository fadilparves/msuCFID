<div class="container">
    <div class="row">
        <div class="box-body">
            <div class="pull-right">
                <a href="{!! route('subContentTwo.createID', ['sub_content_one_id' => $subContentOne->id])!!}" class="btn btn-primary">Add New Second Level Content</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">{!! $subContentOne->sub_number !!} - {!! $subContentOne->title !!}</div>
                <!-- Body Field -->
                <div class="panel-body">
                    <p>{!! $subContentOne->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>



