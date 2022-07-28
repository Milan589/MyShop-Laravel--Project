@extends('layouts.frontend')
@section('title','Customer Register')
@section('main-content')
	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{route('frontend.home')}}" class="link">home</a></li>
					<li class="item-link"><span>Register</span></li>
				</ul>
			</div>
			<div class="row">
				@include('backend.includes.flash') 
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">
								<form action="{{ route('frontend.customer.doregister')}}" method="post">
									@csrf
									<fieldset class="wrap-title">
										<h3 class="form-title">Create an account</h3>
										<h4 class="form-subtitle">Personal infomation</h4>
									</fieldset>									
									<fieldset class="wrap-input">
										<label for="name">Name*</label>
										<input type="text" id="name" name="name" placeholder="Full name*">
										@error('name')
                                        <span class="text-danger">
                                           {{ $message }}
                                        </span>
                                    @enderror
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-reg-email">Email Address*</label>
										<input type="email" id="email" name="email" placeholder="Email address">
										@error('email')
                                        <span class="text-danger">
                                           {{ $message }}
                                        </span>
                                    @enderror
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-reg-pass">Password *</label>
										<input id="password" type="password"  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
										@error('password')
                                        <span class="text-danger">
                                           {{ $message }}
                                        </span>
                                    @enderror
									</fieldset>
									<fieldset class="wrap-input">
										<label for="perm_address">Permanent Address</label>
										<input id="perm_address" name="perm_address" type="text" class="form-control">
										@error('perm_address')
											<span class="text-danger">
											   {{ $message }}
											</span>
										@enderror
									</fieldset>
									<fieldset class="wrap-input">
										<label for="temp_address">Temporary Address</label>
										<input id="temp_address" name="temp_address" type="text" class="form-control">
										@error('temp_address')
											<span class="text-danger">
											   {{ $message }}
											</span>
										@enderror
									</fieldset>
									<fieldset class="wrap-input">
										<label for="shipping_address">Shipping Address</label>
										<input id="shipping_address" name="shipping_address" type="text"
											class="form-control">
										@error('shipping_address')
											<span class="text-danger">
											   {{ $message }}
											</span>
										@enderror
									</fieldset>
									<fieldset class="wrap-input">
										<label for="image">User Image</label>
                                    <input id="image" name="image" type="file" class="form-control">
                                    @error('image')
                                        <span class="text-danger">
                                           {{ $message }}
                                        </span>
                                    @enderror
									</fieldset>
									<fieldset class="wrap-input">
										<label for="phone">Contact</label>
										<input id="phone" name="phone" type="text" class="form-control">
										@error('phone')
											<span class="text-danger">
											   {{ $message }}
											</span>
										@enderror
									</fieldset>
									<input type="submit" class="btn btn-sign" value="Register" name="register">
								</form>
							</div>											
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->
@endsection