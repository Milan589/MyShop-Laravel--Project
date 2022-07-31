@extends('layouts.backend')
@section('title', $module . ' List')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <!-- Main content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('backend.user.create') }}" class="btn btn-info">Create {{ $module }}</a>
                    <a href="{{ route('backend.user.trash') }}" class="btn btn-danger">Trash {{ $module }}</a>
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">List {{ $module }}</h5>
                            <br>
                            @include('backend.common.flash_message')
                            <table class="table-bordered table" id="ecommerce1">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($data['records'] as $record)
                                    <tbody>
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $record->name }}</td>
                                            <td>{{ $record->email }}</td>
                                            <td>{{ $record->role->name }}</td>
                                            <td>
                                                <a href="{{ route($base_route . 'show', $record->id) }}"
                                                    class="btn btn-info">View Details</a>
                                                <a
                                                    href="{{ route($base_route . 'edit', $record->id) }}"class="btn btn-warning">Edit</a>
                                                <form action="{{ route($base_route . 'destroy', $record->id) }}"
                                                    method="post" style="display: inline-block">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#ecommerce1').DataTable({
                "paging": true,
                "ordering": true,
                "info": true
            });
        });
    </script>
@endsection
