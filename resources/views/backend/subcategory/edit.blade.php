@extends('layouts.backend')
@section('title', $module . ' Edit')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header">
                    <h3 class="card-title"> Create {{ $module }}
                        <a href="{{ route($base_route . 'index') }}" @class('btn btn-success')">List</a>
                    </h3>
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        {!! Form::model($data['record'], ['route' => [$base_route . 'store'], 'method' => 'post']) !!}
                        @include('backend.subcategory.main_form', ['button' => 'Update'])
                        {!! Form::close() !!}
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>

@endsection
