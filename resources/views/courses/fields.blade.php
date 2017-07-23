<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			<div class="panel-heading">New Course</div>
				<div class="panel-body">
					<div class="form-group{{ $errors->has('courseName') ? ' has-error' : '' }}">
						<label for="courseName" class="col-md-4 control-label">Course Name</label>

						<div class="col-md-6">
							<input id="courseName" type="text" class="form-control" name="courseName" value="{{ old('courseName') }}" required autofocus>

							@if ($errors->has('courseName'))
							<span class="help-block">
								<strong>{{ $errors->first('courseName') }}</strong>
							</span>
							@endif
						</div>
					</div>
				</br>
				<div class="form-group{{ $errors->has('courseCode') ? ' has-error' : '' }}">
					<label for="courseCode" class="col-md-4 control-label">Course Code</label>

					<div class="col-md-6">
						<input id="courseCode" type="text" class="form-control" name="courseCode" value="{{ old('courseCode') }}" required>

						@if ($errors->has('courseCode'))
						<span class="help-block">
							<strong>{{ $errors->first('courseCode') }}</strong>
						</span>
						@endif
					</div>
				</div>
				<!-- {{$uid = Auth::id()}} -->
				{{Form::hidden('user_id', $uid)}}
			</div>
		</div>
	</div>
</div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
	{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
	<a href="{!! route('courses.index') !!}" class="btn btn-default">Cancel</a>
</div>
