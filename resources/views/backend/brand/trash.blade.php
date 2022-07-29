@extends('layouts.backend')
@section('title', $module .' list')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> {{$module}} Trash</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Trash {{$module}} List
                    <a href="{{route($base_route .'create')}}" @class("btn btn-success")" >Create</a>
                    <a href="{{route($base_route .'index')}}" @class("btn btn-info")" >List</a>
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
                        @foreach ($data['records'] as $record )
                            <tr>
                                <td>{{$loop -> index +1 }}</td>
                                <td>{{$record->title}}</td>
                                <td>{{$record->slug}}</td>
                                {{-- <td>{{$record->status}}</td> --}}
                                <td>
                                   @include('backend.includes.status',['status'=>$record->status])
                                </td>
                                {{-- <td>{{$record->created_by}}</td> --}}
                                <td>
                                    {{$record->createdBy->name}}
                                    {{-- {{\App\Models\User::find($record->created_by)->name}} --}}
                                </td>
                                <td>
                                    @if(!empty($record->updated_by))
                                        {{$record->updatedBy->name}}
                                    @endif
                                </td>
                                <td>
                                  
                                    <form action="{{route($base_route .'restore',$record->id)}}" method="post"  style="display: inline-block">
                                        @csrf
                                        <input type="submit" value="Restore" class='btn btn-success'>
                                    </form>
                                    <form action="{{route($base_route .'force_delete',$record->id)}}" method="post"  style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class='btn btn-danger'>
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
