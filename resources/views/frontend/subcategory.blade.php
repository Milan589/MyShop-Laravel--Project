@extends('layouts.frontend')
@section('title', $data['subcategory']->meta_title)
@section('main-content')

    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{ route('frontend.home') }}" class="link">home</a></li>
                    <li class="item-link"><span>{{$data['subcategory']->title }}</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                    {{-- <div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="{{asset('assets/frontend/images/shop-banner.jpg')}}" alt=""></figure>
						</a>
					</div> --}}
                
                    <!--end wrap shop control-->

                    <div class="row">

                        <ul class="product-list grid-products equal-container">
                            @if($data['subcategory']->products->count() > 0)
                            @foreach ($data['subcategory']->products as $product)
                                @php
                                    $image = $product->productImages()->first();
                                @endphp
                              
                                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                        <div class="product product-style-3 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{ route('frontend.product', $product->slug) }}"
                                                    title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('images/products/' . $image->image_name) }}"
                                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="#"
                                                    class="product-name"><span>{{ $product->title }}</span></a>
                                                <div class="wrap-price"><span class="product-price"><del>Rs.
                                                            {{ $product->price }}</del>Rs.
                                                        {{ $product->price - $product->discount }}</span></div>
                                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </li>
                               
                            @endforeach
                            @else
                            <div class="alert alert-danger">Product not available</div>
                        @endif
                        </ul>

                    </div>

                    <div class="wrap-pagination-info">
                        <ul class="page-numbers">
                            <li><span class="page-number-item current">1</span></li>
                            <li><a class="page-number-item" href="#">2</a></li>
                            <li><a class="page-number-item" href="#">3</a></li>
                            <li><a class="page-number-item next-link" href="#">Next</a></li>
                        </ul>
                        <p class="result-count">Showing 1-8 of 12 result</p>
                    </div>
                </div>
                <!--end main products area-->
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">All Categories</h2>
                        <div class="widget-content">
                            <ul class="list-category">
                                @foreach ($menu_categories  as $category)
                                    @if ($category->activeSubcategories->count() > 0)
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
                    </div><!-- Categories widget-->
            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->
@endsection
