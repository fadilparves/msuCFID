<table class="table">
    <thead>
      <tr>
        <th colspan = "9" class="bg-danger">File</th>
        <th colspan = "3" class="bg-danger">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($videos as $video)
        <tr>
            <td colspan="10">{!! $video->file_path !!}</td>
            <td colspan="2">
                {!! Form::open(['route' => ['video.destroy', $video->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('video.show', [$video->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>