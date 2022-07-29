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
                        <form action="{{ route($base_route . 'store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Title:</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ old('title') }}" placeholder="Enter title">
                                @error('title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Slug:</label>
                                <input type="text" class="form-control" name="slug" id="slug"
                                    value="{{ old('slug') }}" placeholder="Enter slug">
                                @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Rank:</label>
                                <input type="number" class="form-control" name="rank" id="rank"
                                    value="{{ old('rank') }}" placeholder="Enter rank">
                                @error('rank')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Status:</label>
                                <input type="radio" name="status" id="active" value="1">Active
                                <input type="radio" name="status" id="deactive" value="0" checked>Deactive
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" value="Save {{ $module }}">
                                <input type="reset" class="btn btn-danger" value="Reset">
                            </div>

                        </form>

                    </div>
                    <!-- /.card-footer-->
                </div>
            </div>
        </div>
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
