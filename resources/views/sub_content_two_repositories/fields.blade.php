
			<div class="form-group">
				{{Form::label('sub_number', 'Sub Chapter Number')}}
				@if(isset($last_sub_number))
					{{Form::hidden('cond', 1 , array('class' => 'form-control', 'placeholder'=>'', 'id' => 'cond'))}}
					{{Form::hidden('sub_content_id', $last_sub_number->sub_number, array('class' => 'form-control', 'id' => 'sub_content_id'))}}
					{{Form::text('sub_number', null, array('class' => 'form-control', 'id' => 'sub_num', 'readonly'=> 'true'))}}
				@else
					{{Form::text('sub_number', null, array('class' => 'form-control', 'id' => 'sub_num','readonly'=> 'true'))}}
				@endif
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

			    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
			    <a href="{!! route('subContentOnes.index') !!}" class="btn btn-default">Cancel</a>


<script type="text/javascript">
	$(document).ready(function () {
		var cond = $('#cond').val();

		if(cond == 1)
		{
			var x = $('#courses_id').val();
			var y = $('#sub_content_id').val();

			var splited = y.split(".");

			var last_n = splited[splited.length-1];

			var new_last_n = parseInt(last_n) + 1;

			var xy = x + "." + new_last_n;

			$('#sub_num').val(xy);
		}
		else
		{
			var x = $('#courses_id').val();

			var xv = x + "." + 1;

			$('#sub_num').val(xv);
		}

	});
</script>
