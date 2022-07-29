@extends('layouts.backend')
@section('title', $module . ' Create')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">{{ $module }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Edit {{ $module }}</h3>
                        </div>
                        <div class="card-body">
                            {!! Form::model($data['record'], ['route' => [$base_route . 'update', $data['record']->id], 'method' => 'put', 'files' => true]) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                @include('backend.common.validation_field', ['field' => 'name'])
                            </div>
                            <div class="form-group">
                                {!! Form::label('key', 'Key') !!}
                                {!! Form::number('key', null, ['class' => 'form-control']) !!}
                                @include('backend.common.validation_field', ['field' => 'key'])
                            </div>
                            <div class="form-group">
                                {!! Form::label('status', 'Status') !!}
                                {!! Form::radio('status', 1) !!} Active
                                {!! Form::radio('status', 0, true) !!} Deactive
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Save ' . $module, ['class' => 'btn btn-info']) !!}
                                {!! Form::reset('Clear', ['class' => 'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div><!-- /.card -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection
