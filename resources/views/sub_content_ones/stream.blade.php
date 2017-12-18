<div class="panel-body">
	<h2>{!! $subContentOne -> sub_number !!} - {!! $subContentOne -> title !!} </h2>
	<p>{!! $subContentOne->body !!}</p>
	@foreach($subContentTwoRepositories as $sbt)
		<h4>{!! $sbt -> sub_number !!} - {!! $sbt -> title !!}</h4>
		<p>{!! $sbt->body !!}</p>
	@endforeach
</div>