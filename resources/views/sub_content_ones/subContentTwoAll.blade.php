<table class="table">
    <thead>
      <tr>
        <th colspan = "1" class="bg-danger">Sub Number</th>
        <th colspan = "8" class="bg-danger">Title</th>
        <th colspan = "3" class="bg-danger">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($subContentTwoRepositories as $subContentTwoRepository)
        <tr>
            <td colspan="1">{!! $subContentTwoRepository->sub_number !!}</td>
            <td colspan="8">{!! $subContentTwoRepository->title !!}</td>
            <td>
                {!! Form::open(['route' => ['subContentTwoRepositories.destroy', $subContentTwoRepository->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('subContentTwoRepositories.show', [$subContentTwoRepository->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('subContentTwoRepositories.edit', [$subContentTwoRepository->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>