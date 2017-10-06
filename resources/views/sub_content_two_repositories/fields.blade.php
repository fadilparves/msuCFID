<div class="container">
	<div class="row">
		<div class="box-body">
			<div class="form-group">
				{{Form::label('sub_number', 'Sub Chapter Number')}}
				{{Form::text('sub_number', null, array('class' => 'form-control', 'id' => 'sub_num','readonly'=> 'true'))}}
			</div>
			<div class="form-group">
				{{Form::label('title', 'Title')}}
				{{Form::text('title',null,array('class' => 'form-control', 'placeholder'=>'Title'))}}
			</div>
			<div class="form-group">
				{{Form::label('body', '')}}
				{{Form::textarea('body',null,array('class' => 'form-control', 'placeholder'=>'Content', 'id' => 'body'))}}
			</div>
			{{Form::hidden('content_id',null,array('class' => 'form-control', 'placeholder'=>'', 'id' => 'courses_id'))}}
			{{Form::hidden('sub_content_one_id',null,array('class' => 'form-control', 'placeholder'=>''))}}
<!-- Submit Field -->
			<div class="form-group col-sm-12">
			    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
			    <a href="{!! route('subContentTwoRepositories.index') !!}" class="btn btn-default">Cancel</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		var x = $('#courses_id').val();

		var xv = x + "." + 1;

		$('#sub_num').val(xv);
	});
</script>
