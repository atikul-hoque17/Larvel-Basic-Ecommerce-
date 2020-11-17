<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><img src="{{ asset('public/frontend') }}/images/logo.png" alt=" " /></a></h2>
			<p>
E-Shop is an e-commerce site which will be capable of providing every kind of goods and products from every sector to every consumer located in Bangladesh. The world’s market place will be only finger-tips away for any customer in possession of a smartphone/computer and an internet connection. </p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>A trusted online Shop</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ route('newcollection') }}">New Collection</a></li>
						<li><a href="{{ route('topsale') }}">Top Sale</a></li>
						<li><a href="{{ route('discount') }}">Discount</a></li>
						<li><a href="{{ route('contact.us') }}">Contact Us</a></li>
						@auth
                        <li style="color: #19c880;font-weight: bold;">{{  Auth::user()->name  }}
                        	<a href="{{route('user.logout')}}">Logout</a>
                        </li>
		                    @else
		                      <li><a href="http://localhost/blog/register">Register</a></li>                      
		                       
		                @endauth
						
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Hazaribag Zigatola Dhaka-1209 <span>Dhaka,Bangladesh</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:atikulhoque17@gmail.com">atikulhoque17@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : 01670239249</li>
					</ul>
				</div>


				<div class="col-md-4 sign-gd flickr-post">
					<h4>Location</h4>

					<ul>
						<p style="font-size: 12px;">Lily-3,Institute of Leather Engineering & Technology Staff Quarter Dhaka-1209</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.3941436400733!2d90.36673431484537!3d23.73332028459775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf33f20cc6f5%3A0x2c111d77084b6a3a!2sInstitute%20of%20Leather%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sbd!4v1583867007058!5m2!1sen!2sbd" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</ul>
				</div>



				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2020. All rights reserved | <i style="color: #6aa82c;font-weight: bold; ">Develope</i> by <a href="{{ asset('https://www.facebook.com/atikul.hoque17') }}">Atikul Hoque</a></p>
	</div>
</div>
<!-- //footer -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									
									<div class="login-right">
										<h3>Sign in with your account</h3>
										 <form method="POST" action="{{ route('login') }}">
                      					  @csrf
											<div class="sign-in">
												<h4>Email :</h4>
												   <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

					                                @error('email')
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $message }}</strong>
					                                    </span>
					                                @enderror
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

					                                @error('password')
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $message }}</strong>
					                                    </span>
					                                @enderror
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												 <button type="submit" class="btn btn-primary">
				                                    {{ __('Login') }}
				                                </button>

											</div>
										</form>

										<div class="sign-up">
												<a href="http://localhost/blog/register" >REGISTER NOW</a>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>


   