@extends('layouts.backend')
@section('title', $module . ' Create')
@section('main-content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('backend.user.index') }}" class="btn btn-info">List {{ $module }}</a>
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Create {{ $module }}</h3>
                        </div>
                        <div class="card-body">
                            hello
                            {{-- {!! Form::open(['route' => $base_route . 'store', 'method' => 'post']) !!}
                            <div class="form-group">
                                {!! Form::label('role_id', 'Role'); !!}
                                {!! Form::select('role_id',$data['roles'], null,['class' => 'form-control','placeholder' => 'Select role']); !!}
                                @include('backend.common.validation_field',['field' => 'role_id'])
                            </div>
                            <div class="form-group">
                                {!! Form::label('name', 'Name'); !!}
                                {!! Form::text('name', null,['class' => 'form-control']); !!}
                                @include('backend.common.validation_field',['field' => 'name'])
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email'); !!}
                                {!! Form::text('email', null,['class' => 'form-control']); !!}
                                @include('backend.common.validation_field',['field' => 'email'])
                            </div>
                            <div class="form-group">
                                {!! Form::label('password', 'Password'); !!}
                                {!! Form::password('password',['class' => 'form-control']); !!}
                                @include('backend.common.validation_field',['field' => 'password'])
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Save' . ' ' . $module, ['class' => 'btn btn-info']); !!}
                                {!! Form::reset('Clear', ['class' => 'btn btn-danger']); !!}
                            </div> --}}
                            

                            {{-- @include('backend.user.includes.form', ['button' => 'Save']) --}}
                            {!! Form::close() !!}
                        </div>
                    </div><!-- /.card -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
@endsection
@section('js')
    <script>
        $("#name").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
            $("#slug").val(Text);
        });
    </script>
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
