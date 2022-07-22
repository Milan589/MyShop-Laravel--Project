@extends('layouts.backend')
@section('title', $module . ' Edit')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header">
                    <h3 class="card-title"> Update {{ $module }}
                        <a href="{{ route($base_route . 'index') }}" @class('btn btn-success')">List</a>
                    </h3>
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <form action="{{ route($base_route . 'update', $data['record']->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Title:</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ $data['record']->title }}" placeholder="Enter title">
                                @error('title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Slug:</label>
                                <input type="text" class="form-control" name="slug" id="slug"
                                    value="{{ $data['record']->slug }}" placeholder="Enter slug">
                                @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Status:</label>
                                @if ($data['record']->status == 1)
                                    <input type="radio" name="status" id="active" value="1" checked>Active
                                    <input type="radio" name="status" id="deactive" value="0">Deactive
                                @else
                                    <input type="radio" name="status" id="active" value="1">Active
                                    <input type="radio" name="status" id="deactive" value="0" checked>Deactive
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Update {{ $module }}">
                                <input type="reset" class="btn btn-danger" value="Reset">
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
