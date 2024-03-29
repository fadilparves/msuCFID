@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <section class="content-header">
                    <h1 class="text-center">{!! $course->courseCode !!} - {!! $course->courseName !!}</h1>
                    <!-- <h1 class="text-center">Content List</h1> -->
                    <h1 class="pull-right">
                       <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px;margin-right: 10px;" href="{!! route('contents.create', ['id' => $course->id]) !!}">Add New Content</a>
                   </h1>
               </section>
               <div class="content">
                <div class="clearfix"></div>

                @include('flash::message')

                <div class="clearfix"></div>
                <div class="box box-primary">
                    <div class="box-body">
                     <table class="table">
                        <thead>
                          <tr>
                            <th colspan = "9" class="bg-danger">Title</th>
                            <th colspan = "3" class="bg-danger">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($contents as $content)
                     <tr>
                        <td colspan="9">{!! $content->title !!}</td>
                        <!-- <td>{!! $content->body !!}</td> -->
                        <td colspan="3">
                            {!! Form::open(['route' => ['contents.destroy', $content->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{!! route('contents.show', [$content->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                <a href="{!! route('contents.edit', [$content->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
</div>
</div>
</div>
</div>
