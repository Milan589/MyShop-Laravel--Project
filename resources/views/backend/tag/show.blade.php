@extends('layouts.backend')
@section('title', $module . ' list')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List {{ $module }}
                <a href="{{ route($base_route . 'index') }}" class="btn btn-primary">List</a>
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
                            {{ $data['record']->createdBy->name }}
                        </td>
                    <tr>
                        <th>Updated_By</th>
                        <td>
                            @if (!empty($data['record']->updated_by))
                                {{ $data['record']->updatedBy->name }}
                            @endif
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- /.card -->
@endsection
