<table class="table">
    <thead>
      <tr>
        <th colspan = "3" class="bg-danger">Sub Number</th>
        <th colspan = "6" class="bg-danger">Title</th>
        <th colspan = "3" class="bg-danger">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($subContentOnes as $subContentOne)
        <tr>
            <td colspan="3">{!! $subContentOne->sub_number !!}</td>
            <td colspan="6">{!! $subContentOne->title !!}</td>
            <td colspan="3">
                {!! Form::open(['route' => ['subContentOnes.destroy', $subContentOne->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('subContentOnes.show', [$subContentOne->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('subContentOnes.view', [$subContentOne->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('subContentOnes.edit', [$subContentOne->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>