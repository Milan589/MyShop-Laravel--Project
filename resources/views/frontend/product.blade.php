@extends('layouts.frontend')
@section('title',$data['product']->meta_title)
@section('main-content')
	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>{{ $data['product']->category->title }}</span></li>
				</ul>
			</div>
			<div class="row">
				@include('backend.includes.flash')
				<form action="{{ route('frontend.cart.add') }}" method="post">
					@csrf
					<input type="hidden" name="product_id" value="{{ $data['product']->id }}">
					<input type="hidden" name="slug" value="{{ $data['product']->slug }}">
					<input type="hidden" name="name" value="{{ $data['product']->title }}">
					<input type="hidden" name="price" value="{{ $data['product']->price - $data['product']->discount }}">
					<input type="hidden" name="weight" value="1">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
                            @php
                                 $images = $data['product']->productImages()->get(); 
                            @endphp 
							<div class="product-gallery">
							  <ul class="slides">
                                @foreach ($images as $image )
							    <li data-thumb="{{ asset('images/products/' . $image->image_name) }}">
							    	<img src="{{ asset('images/products/' . $image->image_name) }}" alt="product thumbnail" />
							    </li>
                                @endforeach
							  </ul>
							</div>
						</div>
						<div class="detail-info">
                            <h2 class="product-name">{{ $data['product']->title }}</h2>
                            <div class="short-desc">
                                <ul>
                                    <li>{{ $data['product']->description }}</li>
                                    
                                </ul>
                            </div>
							<br>
							@foreach ($data['product']->productOptions as $productOption)
							@php($options = explode(',', $productOption->attribute_value))
							<button class="btn btn-info">
								{{ $productOption->option->title }}:
								<select style="color : white" name="options[]">
									@foreach ($options as $option)
										<option class="btn btn-info" value=""  >Select {{ $productOption->option->title }}
										</option>
										<option class="btn btn-info" value="{{ $option }}">{{ $option }}</option>
									@endforeach
								</select>
							</button>
						@endforeach
                            <div class="wrap-price"><span class="product-price"><del>Rs.{{ $data['product']->price }} </del>Rs.{{ $data['product']->price - $data['product']->discount }}
                            </span></div>
                            <div>
                                <p class="btn btn-info">
                                        <select name="qty" id="qty">
                                            <option value="">Select quantity</option>
                                            @for ($i = 1; $i < $data['product']->stock; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </p>
								{{-- <div class="quantity-input">
									<input type="text" name="qty" id="qty" value="1" data-max="{{$data['product']->stock}}" pattern="[0-9]*" >

									
									<a class="btn btn-reduce" href="#"></a>
									<a class="btn btn-increase" href="#"></a>
								</div> --}}
							</div>
							<div class="quantity">
                            	<span>Tags:</span>
                                <p class="">
									@foreach ($data['product']->tags as $tag)
									<a href="{{ route('frontend.tag', $tag->slug) }}"
										class="btn btn-info">{{ $tag->title }}</a>
								@endforeach
								
							</div>
							<div class="wrap-butons">
								<button type="submit" clbuttonss="btn add-to-cart">Add to Cart</button>
							</div>
						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">description</a>
								<a href="#add_infomation" class="tab-control-item">Specification</a>
							
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									<p>{{$data['product']->description}}</p>
									
								</div>
								<div class="tab-content-item " id="add_infomation">
									<p>{{$data['product']->specification}}</p>
								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->
				</form>
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget widget-our-services ">
						<div class="widget-content">
							<ul class="our-services">

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Free Shipping</b>
											<span class="subtitle">On Oder Over $99</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-gift" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Special Offer</b>
											<span class="subtitle">Get a gift!</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-reply" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Order Return</b>
											<span class="subtitle">Return within 7 days</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->
				</div><!--end sitebar-->
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->
@endsection