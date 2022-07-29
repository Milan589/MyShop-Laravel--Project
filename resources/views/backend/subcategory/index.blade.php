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

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> {{ $module }} List
                <a href="{{ route($base_route . 'create') }}" @class('btn btn-info')">Create</a>
                <a href="{{ route($base_route . 'trash') }}" @class('btn btn-danger')">Trash</a>
            </h3>

        </div>
        <div class="card-body">
            @include('backend.includes.flash')
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th>Updated By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['records'] as $record)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $record->title }}</td>
                            <td>{{ $record->slug }}</td>
                            <td>
                                @include('backend.includes.status', ['status' => $record->status])
                            </td>
                            <td>
                                {{ $record->createdBy->name }}
                            </td>
                            <td>
                                @if (!empty($record->updated_by))
                                    {{ $record->updatedBy->name }}
                                @endif
                            </td>
                            <td>
                                <a href="{{ route($base_route . 'show', $record->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ route($base_route . 'edit', $record->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route($base_route . 'destroy', $record->id) }}" method="post"
                                    style="display: inline-block">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="delete" class='btn btn-danger'>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
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
