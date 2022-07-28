@extends('layouts.frontend')
@section('title', 'Customer Home')
@section('main-content')

    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{ route('frontend.home') }}" class="link">home</a></li>
                    {{-- <li class="item-link"><span>Products</span></li> --}}
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div id="customer-order" >
                        <div class="box">
                            <h1>Order #1735</h1>
                            <p class="lead">Order #1735 was placed on <strong>22/06/2013</strong> and is currently
                                <strong>Being prepared</strong>.</p>
                            <p class="text-muted">If you have any questions, please feel free to <a
                                    href="contact.html">contact us</a>, our customer service center is working for you 24/7.
                            </p>
                            <hr>
                            <div class="table-responsive mb-4">
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
                            </div>
                            <!-- /.table-responsive-->
                            <div class="row addresses">
                                <div class="col-lg-6">
                                    <h2>Invoice address</h2>
                                    <p>John Brown<br>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br>Great Britain
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <h2>Shipping address</h2>
                                    <p>John Brown<br>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br>Great Britain
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end main products area-->

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

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->

@endsection
