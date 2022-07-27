@extends('layouts.frontend')
@section('title', $data['tag']->title)
@section('main-content')

    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb ">
                <ul>
                    <li class="item-link"><a href="{{ route('frontend.home') }}" class="link">home</a></li>
                    <li class="item-link"><span>{{$data['tag']->title}}</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

            
                    {{-- <div class="wrap-shop-control">
                        <h1 class="shop-title">Digital & Electronics</h1>
                    </div> --}}

                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                        @foreach ($data['tag']->products as $product )
                        @php
                            $image = $product->productImages()->first();
                        @endphp

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{ route('frontend.product', $product->slug) }}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('images/products/' . $image->image_name) }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="{{ route('frontend.product', $product->slug) }}" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>{{$product->title}}</span></a>
                                <div class="wrap-price"><span class="product-price">
                                    <del>Rs. {{ $product->price }}</del> Rs.
                                        {{ $product->price - $product->discount }}
                                </span>
                            </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">All Categories</h2>
                        <div class="widget-content">
                            <ul class="list-category">
                                @foreach ($data['categories'] as $category)
                                    @if ($category->subcategories->count() > 0)
                                        <li class="category-item has-child-cate">
                                            <a href="#" class="cate-link">{{ $category->title }}</a>
                                            <span class="toggle-control">+</span>
                                            <ul class="sub-cate">
                                                @foreach ($category->activeSubcategories as $subcategory)
                                                    <li class="category-item"><a
                                                            href="{{ route('frontend.subcategory', $subcategory->slug) }}"
                                                            class="cate-link">{{ $subcategory->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div><!-- Categories widget-->
                <!--end sitebar-->
                    
            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->
@endsection
