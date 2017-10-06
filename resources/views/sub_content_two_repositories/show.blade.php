@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sub Content Two Repository
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('sub_content_two_repositories.show_fields')
                    <a href="{!! route('subContentTwoRepositories.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
