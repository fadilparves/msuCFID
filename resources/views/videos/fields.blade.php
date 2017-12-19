
<div class="form-group">
	{{Form::label('video', 'File')}}
	{{Form::file('video',null,array('class' => 'form-control'))}}
</div>
<!-- <div class="form-group">
	{{Form::label('body', 'Content')}}
	{{Form::textarea('body',null,array('class' => 'form-control', 'placeholder'=>'Content', 'id' => 'body'))}}
</div> -->

{{Form::hidden('content_id',null,array('class' => 'form-control', 'placeholder'=>''))}}
<!-- Submit Field -->

	{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
	<a href="{!! route('contents.index') !!}" class="btn btn-default">Cancel</a>
