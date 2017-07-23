<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $course->id !!}</p>
</div>

<!-- Coursename Field -->
<div class="form-group">
    {!! Form::label('courseName', 'Coursename:') !!}
    <p>{!! $course->courseName !!}</p>
</div>

<!-- Coursecode Field -->
<div class="form-group">
    {!! Form::label('courseCode', 'Coursecode:') !!}
    <p>{!! $course->courseCode !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $course->user_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $course->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $course->updated_at !!}</p>
</div>

