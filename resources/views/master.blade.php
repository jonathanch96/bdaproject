<!DOCTYPE html>
<html>
<head>
	<title>BDA Gallery</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<meta name="viewport" content="user-scalable=yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- harus .ico filenya -->

	<link rel="shorcut icon" type="image/x-icon" href="{{asset('img/icon.ico')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	
	@yield('load_custom_css')

</head>
<body>
<!-- contact us -->

<button onclick="toggleMessage()" id="contactUs" title="Send a message"><i class="fa fa-envelope"></i></button>
<div id="messageForm">
	<div id="closeButton">
		<a href="#" onclick="return closeMessage();" class="close-thik"></a>
		
	</div>
	<div class="form-msg" style="margin-bottom: 20px;">Contact Us</div>
	<div class="form-msg">
		<input type="text" name="name" placeholder="Name*">
	</div>
	<div class="form-msg">
		<input type="text" name="email" placeholder="Email*">
	</div>
	<div class="form-msg">
		<textarea style="resize: none" placeholder="Message*"></textarea>
	</div>
	<div class="form-msg">
		<button class="button-bda">Send</button>
	</div>
</div>
<!-- go top button -->

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

<header>
	<div class="container-fluid" id="index-container" style="">
		<div class="row" style="">
			<div class="col-md-7 ">
				<img style="height: 50px;" src="{{asset('img/logo.png')}}">
			</div>
			<div id="search-bar-index" class="col-md-5" style="overflow:hidden;margin-top: 10px;height: 31px;">
				<input id="search-input-index" style="" type="seach" placeholder="Enter Keyword Here" name="search">
				<img id="search-button-index" style="" src="{{asset('img/button/search.png')}}">
			</div>
		</div>
	</div>
	
</header>
<nav>
	<div class="topnav" id="myTopnav">
	
	  <a href="{{url('')}}/home" {{ setActive('home') }}>Home</a>
	  <a id="toggle" href="" onclick="return false;" >
	  	Brand
	  	<i class="fa fa-caret-down"></i>
	  </a>
	  <div class="dropdown-index" >
	  	<ul id="dropdown-menu-index" style="list-style: none; display: none;">
	  		<?php foreach ($brands as $key => $brand) { ?>
	  		<li onclick="location.href='{{url('')}}/products/{{$brand->brand_name}}'">{{$brand->brand_name}}</li>
	  		<?php } ?>
	  	</ul>
	  </div>
	  
	  <a {{ setActive('about_us') }} href="{{url('')}}/about_us">About Us</a>
	  <a {{ setActive('distributors') }} href="{{url('')}}/distributors">Our Distributors</a>
	  <?php if(Auth::check()){ ?>

		   <a id="toggleAdmin" href="" onclick="return false;" >
		  	Admin
		  	<i class="fa fa-caret-down"></i>
		  </a>
		  <div class="dropdown-admin" >
		  	<ul id="dropdown-admin-index" style="list-style: none; display: none;">
		  		
		  		<li onclick="location.href='{{url('')}}/register'">Register New Admin</li>
		  		<li onclick="location.href='{{url('')}}/manage_brands'">Manage Brands</li>
		  		<li onclick="location.href='{{url('')}}/manage_categories'">Manage Categories</li>
		  		<li onclick="location.href='{{url('')}}/manage_products'">Manage Products</li>
		  		<li onclick="location.href='{{url('')}}/logout'">Logout</li>

		  	</ul>
		  </div>
	  <?php } ?>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
	  
	  
	</div>

</nav>


	@yield('contents')
		
<div class="container-fluid" id="get_latest_product" style="margin-top: 60px;">
	<div class="container-custom" style="font-size: 20px;">
		<div class="row">
			<div class="col-md-4" style="float: left;">Get Our latest product info</div>
			<div  class="col-md-8" style="">
				<div id="subscribe-holder" style="">
					<input type="text" name="email" style="height: 46px;border-radius:5px;padding-left: 5px;" placeholder="Email Address">
					<button class="button-bda" style="">Subscribe Now!</button>
				</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="container-fluid" id="footer-container" style="">
		<div class="row" style="">
			<div class="col-md-12 " style="font-size: 13px;">
				<div class="footer-brand" style="font-size: 20px;margin-top: 20px;"><b>PT. BANGUN DELTA ABADI</b></div>
				<div class="row">
					<div class="col-md-4"  style="margin-top: 10px;font-size: 18px;">
						<div class="footer-menu" onclick="footerToggle('footer-contact')"><b style="">Contact Us</b></div>
						<div id="footer-contact" class="col-md-12 footer-detail" style="margin-top: 5px;">
							<div class="footer-detail-in" style=""><i class="	fa fa-map-marker"></i> Jalan Pinangsia Raya No.82 Jakarta 11110 - Indonesia</div>
							<div class="footer-detail-in">
								<a title="Send us an email" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=bdagallery@gmail.com&body="><i class="fa fa-envelope"></i> bdagallery@gmail.com</a>
							</div>
							<div class="footer-detail-in">
								<i class="fa fa-phone"></i> 021 6244139 / 6244650
							</div>
							<div class="footer-detail-in">
								<i class="fa fa-fax"></i> 021 6251603
							</div>
							<div class="footer-detail-in">
								<a target="_blank" href="https://bdagallery.co.id/"><i class="fa fa-chain"></i> www.bdagallery.co.id</a>
							</div>
						</div>
					</div>


					<div class="col-md-4" style="text-align:center;margin-top: 10px;font-size: 18px">
						<div class="footer-menu" onclick="footerToggle('footer-brands')"><b>Brands</b></div>
						<div class="col-md-12 footer-detail" id="footer-brands" style="text-align:center;">
							<ul style="">
								<li>VALPRA</li>
								<li>ICEPOL</li>
								<li>FRISONE</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4" style="text-align:center;margin-top: 10px;font-size: 18px">
						<div class="footer-menu" onclick="footerToggle('footer-site')"><b>Main Menu</b></div>
						<div class="col-md-12 footer-detail" id="footer-site" style="text-align:center;">
							<ul style="">
								<li onclick="location.href='{{url('')}}/home'">Home</li>
								<li onclick="location.href='{{url('')}}/about_us'">About Us</li>
								<li onclick="location.href='{{url('')}}/distributors'">Our Distributors</li>
							</ul>
						</div>

					</div>
				</div>
				<div class="row">
					
					
					
				</div>
			</div>
			
				
			
		</div>
	</div>
	
</footer>
<div class="footer-bottom">
<div class="container">
	<div class="row">
		<div class="col-sm-12 ">
			<div class="copyright-text">
				<p>CopyRight © 2017 Digital All Rights Reserved</p>
			</div>
		</div> <!-- End Col -->
		
	</div>
</div>
</div>
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/master.js')}}"></script>
	@yield('load_custom_js')

	
</html>