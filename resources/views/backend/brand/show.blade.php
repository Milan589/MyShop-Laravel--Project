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
                <h3 class="card-title">List {{$module}}
                <a href="{{route($base_route .'index')}}" class="btn btn-primary">List</a>
            </h3>

            </div>
            <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th>Title</th>
                            <td>{{ $data['record']->title }}</td>
                        </tr>
                        <tr>
                            <th>Slug</th>
                            <td>{{ $data['record']->slug }}</td>
                        </tr>
                        <tr>
                            <th>Rank</th>
                            <td>{{ $data['record']->rank }}</td>
                        </tr>
                        <tr>
                            <th>Meta Title</th>
                            <td>{{ $data['record']->meta_title }}</td>
                        </tr>
                        <tr>
                            <th>Meta Keyword</th>
                            <td>{{ $data['record']->meta_keyword }}</td>
                        </tr>
                        <tr>
                            <th>Meta Description</th>
                            <td>{{ $data['record']->meta_description }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>@include('backend.includes.status', ['status' => $data['record']->status])</td>
                        </tr>
                        <tr>
                            <th>Created_at</th>
                            <td> {{ $data['record']->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Updated_at</th>
                            <td> {{ $data['record']->updated_at }}</td>
                        </tr>
                        <tr>
                            <th>Created_By</th>

                        <td>
                            {{$data['record']->createdBy->name}}
                        </td>
                        <tr>
                            <th>Updated_By</th>
                            <td>
                                @if(!empty($data['record']->updated_by))
                                    {{ $data['record']->updatedBy->name }}
                                @endif
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
@endsection
