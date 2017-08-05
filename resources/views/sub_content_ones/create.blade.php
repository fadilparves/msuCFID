@extends('layouts.app')

@section('content')
    <section class="content-header text-center">
        <h1>
            Sub Content
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'subContentOnes.store']) !!}

                        @include('sub_content_ones.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
