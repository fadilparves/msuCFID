<div class="container">
	<div class="row">
		<div class="box-body">
			<div class="form-group">
				{{Form::label('sub_number', 'Sub Chapter Number')}}
				{{Form::text('sub_number',null,array('class' => 'form-control', 'placeholder'=>'Chapter Number e.g 1.1'))}}
			</div>
			<div class="form-group">
				{{Form::label('title', 'Title')}}
				{{Form::text('title',null,array('class' => 'form-control', 'placeholder'=>'Title'))}}
			</div>
			<div class="form-group">
				{{Form::label('body', '')}}
				{{Form::textarea('body',null,array('class' => 'form-control', 'placeholder'=>'Content', 'id' => 'body'))}}
			</div>
			{{Form::hidden('content_id',null,array('class' => 'form-control', 'placeholder'=>''))}}
			<!-- {{Form::hidden('user_id')}} -->
			<!-- <input type='hidden' name="content_id" id='content_id' value=''> -->
			<!-- Submit Field -->
			<div class="form-group col-sm-12">
				{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
				<a href="{!! route('subContentOnes.index') !!}" class="btn btn-default">Cancel</a>
			</div>
		</div>
	</div>
</div>