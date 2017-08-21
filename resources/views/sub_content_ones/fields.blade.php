<div class="container">
	<div class="row">
		<div class="box-body">
			<div class="form-group">
				{{Form::label('sub_number', 'Sub Chapter Number')}}
				@if(!isset($subContentOne->id))
				@foreach ($last_sub_number as $lsn)<!--for each every data in the object-->
				@if($lsn->id != 0)
				<div @if ($lsn == end($last_sub_number)) @endif><!--look for the last data in the object and then plus 0.1 at the field-->
					{{Form::text('sub_number', $lsn->content_id-1+$lsn->sub_number+0.1, array('class' => 'form-control', 'readonly'=> 'true'))}}
				</div>
				@else
				{{Form::text('sub_number', null, array('class' => 'form-control', 'id' => 'sub_num','readonly'=> 'true'))}}
				@endif
				@endforeach
				@else
				{{Form::text('sub_number', null, array('class' => 'form-control', 'readonly'=> 'true'))}}
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
			<!-- {{Form::hidden('user_id')}} -->
			<!-- <input type='hidden' name="content_id" id='content_id' value=''> -->
			<!-- Submit Field -->

			<div class="form-group col-sm-12">
				{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
				<a href="{!! route('contents.index') !!}" class="btn btn-default">Cancel</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		var x = $('#courses_id').val();

		var xv = x + 0.1;

		$('#sub_num').val(xv);
	});
</script>
