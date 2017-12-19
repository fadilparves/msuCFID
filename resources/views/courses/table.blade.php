<table class="table">
    <thead>
      <tr>
        <th colspan = "6" class="bg-danger">Course Name</th>
        <th colspan = "6" class="bg-danger">Course Code</th>
        <th colspan = "3" class="bg-danger">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($courses as $course)
        <tr>
            <td colspan="6">{!! $course->courseName !!}</td>
            <td colspan="6">{!! $course->courseCode !!}</td>
            <!-- <td>{!! $course->user_id !!}</td> -->
            <td colspan="3"> 
                {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('courses.show', [$course->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('courses.edit', [$course->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>