<div class="form-group">
	{{Form::label('courseName', 'Course Name')}}
	{{Form::text('courseName',null,array('class' => 'form-control', 'placeholder'=>'Course Name'))}}
</div>
<div class="form-group">
	{{Form::label('courseCode', 'Course Code')}}
	{{Form::text('courseCode',null,array('class' => 'form-control', 'placeholder'=>'Course Code', 'id' => 'courseCode'))}}
</div>
<!-- {{$uid = Auth::id()}} -->
{{Form::hidden('user_id', $uid)}}
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{!! route('courses.index') !!}" class="btn btn-default">Cancel</a>