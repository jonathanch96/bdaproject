@extends('master')

@section('contents')
<section id="index-section" style="">
	<div class="container-fluid">

	  <div  id="myCarousel" class="carousel slide container-custom" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" style="margin-right: 2.5px;,margin-right: 3px;" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" style="margin-right: 2.5px;,margin-right: 3px;" data-slide-to="1"></li>
	      <li data-target="#myCarousel" style="margin-right: 2.5px;,margin-right: 3px;" data-slide-to="2"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active">
	        <img src="{{asset('img/main_slider/1.jpg')}}" alt="Los Angeles" style="width:100%;">
	      </div>

	      <div class="item">
	        <img src="{{asset('img/main_slider/2.jpg')}}" alt="Chicago" style="width:100%;">
	      </div>
	    
	      <div class="item">
	        <img src="{{asset('img/main_slider/3.jpg')}}" alt="New york" style="width:100%;">
	      </div>
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>
	<!-- <div class="container-fluid" style="margin-top: 10px;margin-bottom: 40px;">
		<div class="container-custom" style="overflow: hidden;">
			<div id="product-carousel-container" style="width: 1000%;">
				<?php for ($i=1; $i <7 ; $i++) { 
					 ?>
				<div class="product-carousel-item" style="">
					<img style="width: 100%;object-fit:cover;float: left;" src="{{asset('img/product_slider')}}/{{$i}}.png">
					<div class="caption" style="margin-top: -175%;float: left;">
						<h2 style="">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</h2>
						<a href="">See more</a>
					</div>
				</div>
				<?php } ?>
				<?php for ($i=1; $i <7 ; $i++) { 
					 ?>
				<div class="product-carousel-item" style="">
					<img style="width: 100%;object-fit:cover;float: left;" src="{{asset('img/product_slider')}}/{{$i}}.png">
					<div class="caption" style="margin-top: -175%;float: left;">
						<h2 style="">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</h2>
						<a href="">See more</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div> -->
	<div class="container-fluid" style="margin-top: 30px;">
		<div class="container-custom" style="border-bottom: 1px solid #999;">
			<div style="font-size: 26px;border-bottom: 4px solid #a8131d;display: inline-block;">About Us</div>
		</div>
		<div class="container-custom" style="    text-align: center;font-size: 20px;margin-top: 7px;margin-bottom: 7px;">
			Want to establish a business relation with us? <a href="#" onclick="openMessage();" style="color: #a8131d">Get in Touch Now</a>
		</div>
	</div>
	<div class="container-fluid">
		<div class="container-custom">
			<img style="width: 100%;" src="{{asset('img/about_us.png')}}">
		</div>
		<div class="container-custom" style="text-align: center;font-size: 11px;padding: 0 2%;margin-top: 30px;margin-bottom: 35px;">
			PT. GRAHA CITRA PRATAMA has been established 6 (six) years ago at Jakarta specializing in trading imported finished building material products especially in floorings and decorative with various sizes, surfaces and area of product applications such as around the wall or simply on the floor. The company is a division set apart of the mother company (PT.BDA) that has been established since 1980 which was considered as a leading and pioneer trading company of finished building material products in Indonesia market. PT. GRAHA CITRA PRATAMA main office is established on the west Jakarta, Indonesia based on the decision of the company to focus on the commodity of floorings and decorative under the brands of COVE and VIVA.
			<br><br>
			PT. GRAHA CITRA PRATAMA scope of work is sales distribution of the imported flooring products all around Indonesia in its retail (agents/ end-users) traditionally as well modern outlets and project markets. The company undertakes responsibilities of not only importing and selling our products to the market but also getting the products to the location of our buyers. The company also is responsible of after sales service if any problem arises after the application of our products.
			<br><br>
			Our products are mainly imported from China but some originated from Japan, Taiwan and Spain. Our products are produced by selected factories from countries of origins mentioned above only those manufacturers that have passed the certification of international organization of standardization (ISO). Our company also complies with Indonesia Regulations (SNI) where it requires the government institution from ministry of trade and industry to inspect our manufacturers respectively every year. SNI is Indonesia’s national certification of standardization and our company holds the legal certificate since 6 years ago where yearly inspection is carried on to our manufacturers.
		</div>
	</div>
	<div class="container-fluid" style="margin-top: 10px;">
		<div class="container-custom" style="">
			<div style="font-size: 26px;border-bottom: 4px solid #a8131d;display: inline-block;">New Arrival</div>
		</div>
		<div class="container-custom" style="margin-top: 10px;">
			<div class="row">
				<div class="col-md-6"><img style="width: 100%;" src="{{asset('img/new_arrival/1.png')}}"></div>
				<div class="col-md-6"><img style="width: 100%;" src="{{asset('img/new_arrival/1.png')}}"></div>
			</div>
		</div>
	</div>
</section>	

@stop
@section('load_custom_css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
	::-webkit-scrollbar {display: none;}
</style>
@stop
@section('load_custom_js')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<!--   <script src="{{asset('js/index.js')}}"></script> -->

@stop