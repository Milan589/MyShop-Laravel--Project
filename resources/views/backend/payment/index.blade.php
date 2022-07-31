@extends('layouts.backend')
@section('title',' Payment')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Payment</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                {{-- <a href="{{ route('backend.order.trash') }}" class="btn btn-danger">Trash {{ $module }}</a> --}}
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">List Payment</h5>
                        <br>
                        @include('backend.common.flash_message')
                        <table class="table-bordered table" id="ecommerce1">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Customer Name</th>
                                    <th>Payment Id</th>
                                    <th>Email</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            @foreach ($data['records'] as $record)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>
                                            {{-- {{ $record->customer->name}} --}}
                                        </td>
                                        {{-- <td>{{ $record->name }}</td> --}}
                                        <td>{{ $record->payment_id }}</td>
                                        <td>{{ $record->payer_email }}</td>
                                        <td>{{ $record->amount }}</td>
                                        <td>
                                            {{$record->payment_status}}
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
