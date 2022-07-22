@extends('layouts.backend')
@section('title', $module . ' list')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header">
                    <h3 class="card-title"> Create {{ $module }}
                        <a href="{{ route($base_route . 'index') }}" @class('btn btn-success')">List</a>
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
    <script>
        $("#title").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace('/\s/g', '-');
            $("#slug").val(Text);
        });
    </script>
@endsection
