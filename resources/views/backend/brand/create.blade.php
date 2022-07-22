@extends('layouts.backend')
@section('title', $module .' list')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$module}} Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{$module}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">  Create {{$module}}
                <a href="{{route($base_route .'index')}}" @class("btn btn-success")" >List</a>
            </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            {{-- create form for employee --}}
            <form action="{{ route($base_route .'store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Title:</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"
                        placeholder="Enter title">
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Slug:</label>
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}"
                        placeholder="Enter slug">
                    @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="rank">Rank:</label>
                    <input type="number" class="form-control" name="rank" id="rank" value="{{ old('rank') }}"
                        placeholder="Enter rank">
                    @error('rank')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Image:</label>
                    <input type="file" class="form-control" name="image" id="image" value="{{ old('image') }}">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Meta Title:</label>
                    <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{ old('meta_title') }}"
                        placeholder="Enter meta_title">
                    @error('meta_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Meta Keyword:</label>
                    <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{{ old('meta_keyword') }}"
                        placeholder="Enter meta_keyword">
                    @error('meta_keyword')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Meta Description:</label>
                    <input type="text" class="form-control" name="meta_description" id="meta_description" value="{{ old('meta_description') }}"
                        placeholder="Enter meta_description">
                    @error('meta_description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Status:</label>
                    <input type="radio" name="status" id="active" value="1">Active
                    <input type="radio" name="status" id="deactive" value="0" checked>Deactive
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Save {{$module}}">
                    <input type="reset" class="btn btn-danger" value="Reset">
                </div>

            </form>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
@endsection
@section('js')
    <script>
        $("#title").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace('/\s/g', '-');
            $("#slug").val(Text);
        });
    </script>
@endsection
