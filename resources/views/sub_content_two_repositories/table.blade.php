<table class="table table-responsive" id="subContentTwoRepositories-table">
    <thead>
        <tr>
            <th>Sub Number</th>
        <th>Title</th>
        <th>Body</th>
        <th>Sub Content One Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($subContentTwoRepositories as $subContentTwoRepository)
        <tr>
            <td>{!! $subContentTwoRepository->sub_number !!}</td>
            <td>{!! $subContentTwoRepository->title !!}</td>
            <td>{!! $subContentTwoRepository->body !!}</td>
            <td>{!! $subContentTwoRepository->sub_content_one_id !!}</td>
            <td>
                {!! Form::open(['route' => ['subContentTwoRepositories.destroy', $subContentTwoRepository->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('subContentTwoRepositories.show', [$subContentTwoRepository->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('subContentTwoRepositories.edit', [$subContentTwoRepository->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>