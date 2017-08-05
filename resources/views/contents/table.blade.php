<table class="table table-responsive" id="contents-table">
    <thead>
        <th colspan="9">Title</th>
        <!-- <th>Body</th> -->
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($contents as $content)
        <tr>
            <td colspan="9">{!! $content->title !!}</td>
            <!-- <td>{!! $content->body !!}</td> -->
            <td colspan="3">
                {!! Form::open(['route' => ['contents.destroy', $content->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contents.show', [$content->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contents.edit', [$content->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>