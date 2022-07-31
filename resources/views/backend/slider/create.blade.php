@extends('layouts.backend')
@section('title', $module . ' list')

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
                <div class="card-header">
                    <h3 class="card-title"> Create {{ $module }}
                        <a href="{{ route($base_route . 'index') }}" @class('btn btn-info')">List</a>
                    </h3>
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        {!! Form::open(['route' => [$base_route . 'store'], 'method' => 'post']) !!}
                        @include($base_view . 'main_form', ['button' => 'Save'])
                        {!! Form::close() !!}
                        {{-- </form> --}}
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
       <script>
        CKEDITOR.replace('description');
    </script> 
    
@endsection
