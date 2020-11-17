<style type="text/css">
	.header-bot {
    padding: 5px 0 !important;
} 
div#categories {
    height: 52px !important;
}

.header-right{
	float: right;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
			<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:atikulhoque17@gmail.com">atikulhoque17@gmail.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">					
			<h1><a href="{{ url('/') }}"><img style="width: 150px;height: 100px;" src="{{ asset('public/frontend') }}/images/logo.png"></a></h1>
		</div>
		<!-- <div id="categories" class="col-md-6 Soft-header-middle">
			<form>
				<div class="search">
					<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">All categories</option>
						<option value="null">Electronics</option>     
						<option value="AX">kids Wear</option>
						<option value="AX">Men's Wear</option>
						<option value="AX">Women's Wear</option>
						<option value="AX">Watches</option>
					</select>
				</div>
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div> -->
		<div class="col-md-3 header-right footer-bottom">
			<ul>

					
				
					
				
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="you" href="#"></a></li>

				<li><a class="you" href="#"></a></li>
				@auth
                        <li style="color: #19c880;font-weight: bold;">{{  Auth::user()->name  }}
                        	<a href="{{route('user.logout')}}">Logout</a>
                        </li>
                    @else
                        <li>
                        	<a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
                        </li>                        
                       
                @endauth

			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>