<div class="container">
    <div class="row">
        <div class="box-body">
            <div class="panel panel-default">
                <table class="table table-responsive" id="subContentOnes-table">
                    <thead>
                        <th colspan="10">File</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        @foreach($videos as $video)
                        <tr>
                            <td colspan="10">{!! $video->file_path !!}</td>
                            <td colspan="2">
                                {!! Form::open(['route' => ['video.destroy', $video->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('video.show', [$video->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>