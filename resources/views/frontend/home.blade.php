<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/frontend/images/favicon.ico')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/color-01.css')}}">
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item" ><a title="Register or Login" href="login.html">Login</a></li>
								<li class="menu-item" ><a title="Register or Login" href="register.html">Register</a></li>						
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="{{asset('assets/frontend/images/logo-top-1.png')}}" alt="mercado"></a>
						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="#" id="form-search-top" name="form-search-top">
									<input type="text" name="search" value="" placeholder="Search here...">
									<button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									<div class="wrap-list-cate">
										<input type="hidden" name="product-cate" value="0" id="product-cate">
										<a href="#" class="link-control">All Category</a>
										<ul class="list-cate">
											<li class="level-0">All Category</li>
											<li class="level-1">-Electronics</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Headphone & Headsets</li>
											<li class="level-2">Mp3 Player & Acessories</li>
											<li class="level-1">-Smartphone & Table</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Mp3 Player & Headphones</li>
											<li class="level-2">Table & Accessories</li>
											<li class="level-1">-Electronics</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Headphone & Headsets</li>
											<li class="level-2">Mp3 Player & Acessories</li>
											<li class="level-1">-Smartphone & Table</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Mp3 Player & Headphones</li>
											<li class="level-2">Table & Accessories</li>
										</ul>
									</div>
								</form>
							</div>
						</div>

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section minicart">
								<a href="#" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">4 items</span>
										<span class="title">CART</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="index.html" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="shop.html" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="cart.html" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="checkout.html" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					<div class="item-slide">
						<img src="{{asset('assets/frontend/images/main-slider-1-1.jpg')}}" alt="" class="img-slide">
						<div class="slide-info slide-1">
							<h2 class="f-title">Kid Smart <b>Watches</b></h2>
							<span class="subtitle">Compra todos tus productos Smart por internet.</span>
							<p class="sale-info">Only price: <span class="price">$59.99</span></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
					<div class="item-slide">
						<img src="{{asset('assets/frontend/images/main-slider-1-2.jpg')}}" alt="" class="img-slide">
						<div class="slide-info slide-2">
							<h2 class="f-title">Extra 25% Off</h2>
							<span class="f-subtitle">On online payments</span>
							<p class="discount-code">Use Code: #FA6868</p>
							<h4 class="s-title">Get Free</h4>
							<p class="s-subtitle">TRansparent Bra Straps</p>
						</div>
					</div>
					<div class="item-slide">
						<img src="{{asset('assets/frontend/images/main-slider-1-3.jpg')}}" alt="" class="img-slide">
						<div class="slide-info slide-3">
							<h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
							<span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
							<p class="sale-info">Stating at: <b class="price">$225.00</b></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
				</div>
			</div>

			

			<!--On Sale-->
			<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box">On Sale</h3>
				<div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{asset('assets/frontend/images/products/tools_equipment_7.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{asset('assets/frontend/images/products/digital_18.jpg')}}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{asset('assets/frontend//images/products/fashion_08.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{asset('assets/frontend/images/products/digital_17.jpg')}}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{asset('assets/frontend/images/products/tools_equipment_3.jpg')}}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{asset('assets/frontend/images/products/fashion_05.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{asset('assets/frontend/images/products/digital_04.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{asset('assets/frontend/images/products/kidtoy_05.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
						</div>
					</div>

				</div>
			</div>

			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Latest Products</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{asset('assets/frontend/images/digital-electronic-banner.jpg" width="1170')}}" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">						
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/digital_04.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/digital_17.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/digital_15.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/digital_01.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/digital_21.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/digital_03.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/digital_04.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/digital_05.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Categories</h3>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							<a href="#fashion_1a" class="tab-control-item active">Smartphone</a>
							<a href="#fashion_1b" class="tab-control-item">Watch</a>
							<a href="#fashion_1c" class="tab-control-item">Laptop</a>
							<a href="#fashion_1d" class="tab-control-item">Tablet</a>
						</div>
						<div class="tab-contents">

							<div class="tab-content-item active" id="fashion_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_01.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Lois Caron LCS-4027 Analog Watch - For Men</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_02.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Business Men Leather Laptop Tote Bags Man Crossbody </span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_09.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="{{asset('assets/frontend/images/products/fashion_03.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
										<div class="group-flash">
											<span class="flash-item new-label">new</span>
											<span class="flash-item sale-label">sale</span>
										</div>
										<div class="wrap-btn">
											<a href="#" class="function-link">quick view</a>
										</div>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>
										<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
									</div>
								</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_07.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_08.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_06.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_05.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-content-item" id="fashion_1b">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_03.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_07.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_08.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_09.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_02.')}}'" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_05.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_08.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_04.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-content-item" id="fashion_1c">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_02.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_03.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_04.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_05.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_06.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_07.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_08.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-content-item" id="fashion_1d">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_05.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_04.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_03.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_02.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_01.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('assets/frontend/images/products/fashion_06.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			

		</div>

	</main>

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Gaushala, Kathmandu</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">01560258</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">Contact@yourcompany.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Hot Line</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Call Us toll Free</span>
										<b class="phone-number">(+123) 456 789</b>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">My Account</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">My Account</a></li>
												<li class="menu-item"><a href="#" class="link-term">Brands</a></li>
												<li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Infomation</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
												<li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">We Using Safe Payments:</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="{{asset('assets/frontend/images/payment.png')}}" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Social network</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Dowload App</h3>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="{{asset('assets/frontend/images/brands/apple-store.png')}}" alt="apple store" width="128" height="36"></figure></a></li>
											<li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="{{asset('assets/frontend/images/brands/google-play-store.png')}}" alt="google play store" width="128" height="36"></figure></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2020 Surfside Media. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>								
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="{{asset('assets/frontend/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('assets/frontend/js/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/frontend/js/functions.js')}}"></script>
</body>
</html>