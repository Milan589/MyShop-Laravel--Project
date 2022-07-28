@extends('layouts.frontend')
@section('title', 'Checkout')
@section('main-content')
    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{ route('frontend.home') }}" class="link">home</a></li>
                    <li class="item-link"><span>Checkout</span></li>
                </ul>
            </div>
            <div class="row">
                @include('backend.includes.flash')
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">Customer Section</h2>
                        <div class="widget-content">
                            <ul class="list-category">
                                <li class="category-item has-child-cate">
                                    <ul class="nav nav-pills flex-column">
                                        <li> <a href="" class="nav-link active"><i class="fa fa-list"></i> My
                                                orders</a></li>
                                        <li> <a href="customer-wishlist.html" class="nav-link"><i class="fa fa-user"></i> My
                                                account</a></li>

                                        <li> <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();"><i
                                                    class="fa fa-sign-out"></i>
                                                {{ __('Logout') }}

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </a>
                                        </li>
                                    </ul>
                        </div>
                    </div><!-- Categories widget-->
                </div>
                <!--end sitebar-->
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div id="customer-order">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Products Name</h3>

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
                                        @if (count($carts) > 0)
                                            @php
                                                $total = 0;
                                            @endphp
                                            @foreach ($carts as $index => $cart)
                                                @php
                                                    $product = \App\Models\Backend\Product::find($cart->id);
                                                    $image = $product->productImages()->first();
                                                    $total += $cart->qty * $cart->price;
                                                @endphp
                                                <input type="hidden" name="row_id[]" value="{{ $index }}">
                                                <tr>
                                                    <td>
                                                        <div class="product-image">
                                                            <figure><img
                                                                    src="{{ asset('images/products/' . $image->image_name) }}"
                                                                    alt=""></figure>
                                                        </div>
                                                    </td>
                                                    <td><a href="#">{{ $cart->name }}</a></td>
                                                    <td>
                                                        {{ $cart->qty }}"
                                                    </td>
                                                    <td>{{ $cart->price }}</td>

                                                    <td>{{ $cart->qty * $cart->price }}</td>
                                                </tr>
                                            @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="4">Total</th>
                                            <th colspan="1">Rs. {{ $total }}</th>
                                        </tr>
                                    @else
                                        <tr>
                                            <td colspan="6">Cart is empty</td>
                                        </tr>
                                        @endif
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

            </div>
            <!--end row-->
            <div class="col-lg-12">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">
                            <form action="{{ route('frontend.docheckout') }}" method="post">
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Checkout Section</h3>
                                    <h4 class="form-subtitle">Personal infomation</h4>
                                </fieldset>

                                <fieldset class="wrap-input">
                                    <label for="shipping_address">Shipping Address</label>
                                    <textarea id="shipping_address" name="shipping_address" type="text"
                                        class="form-control">
                                        {{auth()->user()->customer->shipping_address}}
                                    </textarea>
                                    @error('shipping_address')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="phone">Contact</label>
                                    <input id="phone" name="phone" type="text" class="form-control" value="{{auth()->user()->customer->phone}}">
                                    @error('phone')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="payment-mode">Payment Mode</label>
                                    <input id="payment_mode" name="payment_mode" type="radio" value="cod" checked>COD
                                    <input id="payment_mode" name="payment_mode" type="radio" value="online">Online
                                </fieldset>
                                <input type="submit" class="btn btn-sign" value="Process" name="register">
                            </form>
                        </div>
                    </div>
                </div>
                <!--end main products area-->
            </div>
        </div>
        <!--end container-->

    </main>
    <!--main area-->
@endsection
