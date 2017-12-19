<div class="form-group">
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

{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{!! route('subContentOnes.index') !!}" class="btn btn-default">Cancel</a>