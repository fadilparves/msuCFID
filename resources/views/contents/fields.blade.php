<div class="container">
	<div class="row">
		<div class="box-body">
			<div class="form-group">
			{{ Form::select('courses', $courses, null, array('class' => 'form-control', 'placeholder'=>'Choose One', 'id' => 'courses')) }}			
			</div>
			<div class="form-group">
				{{Form::label('chap_num', 'Chapter Number')}}
				{{Form::text('chap_num',null,array('class' => 'form-control', 'placeholder'=>'Chapter Number e.g 1'))}}
			</div>
			<div class="form-group">
				{{Form::label('title', 'Title')}}
				{{Form::text('title',null,array('class' => 'form-control', 'placeholder'=>'Title'))}}
			</div>
			<!-- <div class="form-group">
				{{Form::label('body', 'Content')}}
				{{Form::textarea('body',null,array('class' => 'form-control', 'placeholder'=>'Content', 'id' => 'body'))}}
			</div> -->

			{{Form::hidden('user_id', Auth::id())}}
			<input type='hidden' name="course_id" id='course_id' value=''>
			<!-- Submit Field -->
			<div class="form-group col-sm-12">
				{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
				<a href="{!! route('contents.index') !!}" class="btn btn-default">Cancel</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	  $(function(){
        $('#courses').change(function(){
            var x = $(this).val();

            $('#course_id').val(x);
        });
    }); 
</script>
