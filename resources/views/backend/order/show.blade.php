@extends('layouts.backend')
@section('title', $module . ' List')
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
            {{-- <div class="col-lg-12">
                <a href="{{ route('backend.role.index') }}" class="btn btn-info">List {{ $module }}</a>
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        @include('backend.common.flash_message')
                        <table class="table-bordered table">
                            <tr>
                                <th>Name</th>
                                <td>{{ $data['record']->name }}</td>
                            </tr>
                            <tr>
                            <tr>
                                <th>Key</th>
                                <td>{{ $data['record']->key }}</td>
                            </tr>
                            <th>Status</th>
                            <td>
                                @if ($data['record']->status == 1)
                                    <span class="text-success">Active</span>
                                @else
                                    <span class="text-danger">Deactive</span>
                                @endif
                            </td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>{{ $data['record']->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Updated at</th>
                                <td>{{ $data['record']->updated_at }}</td>
                            </tr>
                           
                                <th>Updated_By</th>
                                <td>
                                    @if (!empty($data['record']->updated_by))
                                        {{ $data['record']->updatedBy->name }}
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div><!-- /.card -->
            </div> --}}
            <div class="col-lg-4">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">

                            <fieldset class="wrap-title">

                                <h3 class="form-subtitle">Personal infomation</h3>
                            </fieldset>
                            <hr>

                            <fieldset class="wrap-input">
                                <label for="name">Customer Name : </label>
                                {{$data['record']->name}}
                            </fieldset> <hr>
                            <fieldset class="wrap-input">
                                <label for="shipping_address">Shipping Address : </label>
                                {{$data['record']->shipping_address}}
                            </fieldset> <hr>
                            <fieldset class="wrap-input">
                                <label for="phone">Contact : </label>
                                {{$data['record']->phone}}
                            </fieldset> <hr>
                            <fieldset class="wrap-input">
                                <label for="phone">Order Date : </label>
                                {{$data['record']->order_date}}
                            </fieldset> <hr>
                            <fieldset class="wrap-input">
                                <label for="phone">Payment Mode : </label>
                                {{$data['record']->payment_mode}}
                            </fieldset> <hr>
                        </div>
                    </div>
                </div>
                <!--end main products area-->
            </div>
            <div class="col-lg-8 ">
                <div id="customer-order">
                    <div class="wrap-iten-in-cart">
                        <h3 class="box-title">Products Name</h3>
                        {{-- <div class="table-responsive mb-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#"><img src="img/detailsquare.jpg"
                                                    alt="White Blouse Armani"></a></td>
                                        <td><a href="#">White Blouse Armani</a></td>
                                        <td>2</td>
                                        <td>$123.00</td>
                                        <td>$0.00</td>
                                        <td>$246.00</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><img src="img/basketsquare.jpg"
                                                    alt="Black Blouse Armani"></a></td>
                                        <td><a href="#">Black Blouse Armani</a></td>
                                        <td>1</td>
                                        <td>$200.00</td>
                                        <td>$0.00</td>
                                        <td>$200.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5" class="text-right">Order subtotal</th>
                                        <th>$446.00</th>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">Shipping and handling</th>
                                        <th>$10.00</th>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">Tax</th>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">Total</th>
                                        <th>$456.00</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div> --}}
                        <ul class="products-cart">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th colspan="2">Total</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($data['record']->orderItems as $item)
                                        @php
                                            $image = $product->productImages()->first();
                                        @endphp
                                        <tr>
                                            <td>
                                                <div class="product-image">
                                                    <figure><img src="{{ asset('images/products/' . $image->image_name) }}"
                                                            alt=""></figure>
                                                </div>
                                            </td>
                                            <td><a href="#">{{ $item->auth()->user()->name }}</a></td>
                                            <td>
                                                {{ $item->qty }}"
                                            </td>
                                            <td>{{ $item->price }}</td>

                                            <td>{{ $item->qty * $item->price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4">Total</th>
                                        {{-- <th colspan="1">Rs. {{ $total }}</th> --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </ul>
                    </div>
                    {{-- <div class="order-summary">
                        <h4 class="title-box">Order Summary</h4>
                        <p class="summary-info"><span class="title">Subtotal</span><b class="index">Rs.
                                {{  $total }}</b></p>
                        <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b>
                        </p>
                        <p class="summary-info total-info "><span class="title">Total</span><b class="index">Rs.
                                {{  $total }}</b></p>
                    </div> --}}
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

@endsection
