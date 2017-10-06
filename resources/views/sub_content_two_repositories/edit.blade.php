@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sub Content Two Repository
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($subContentTwoRepository, ['route' => ['subContentTwoRepositories.update', $subContentTwoRepository->id], 'method' => 'patch']) !!}

                        @include('sub_content_two_repositories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection