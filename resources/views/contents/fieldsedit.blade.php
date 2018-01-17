<div class="form-group">
		{{Form::text('chap_num', $content->chap_num, array('class' => 'form-control', 'id' => 'chpt_num','readonly'=> 'true'))}}
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
{{Form::hidden('course_id', $last_course_number->course_id , array('class' => 'form-control', 'id' => 'course_id'))}}
<!-- Submit Field -->

{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{!! route('contents.index') !!}" class="btn btn-default">Cancel</a>


<script type="text/javascript">
	 $(document).ready(function () {
	 	var cond = $('#cond').val();
	 	var lst_chpt = $('#last_course_chapter').val();

	 	if(cond == 1)
	 	{
	 		var new_chapter_num = parseInt(lst_chpt) + 1;

	 		$('#chpt_num').val(new_chapter_num);
	 	}
	 	else
	 	{
	 		$('#chpt_num').val(1);
	 	}
	 });
</script>
