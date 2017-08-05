<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">New Course</div>
				<div class="panel-body">
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
				</div>
				<div class="form-group col-sm-12"  style="margin-top: 10px;" >
					{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
					<a href="{!! route('courses.index') !!}" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Submit Field -->

