<div class="container">
    <div class="row">
        <div class="box-body">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $subContentTwoRepository->sub_number !!} - {!! $subContentTwoRepository->title !!}</div>
                <!-- Body Field -->
                <div class="panel-body">
                    <p>{!! $subContentTwoRepository->body !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{!! route('contents.index')!!}" class="btn btn-default">Back</a>
        </div>
    </div>
</div><!-- Id Field -->
