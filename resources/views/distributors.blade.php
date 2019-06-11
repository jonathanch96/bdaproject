@extends('master')

@section('contents')
<section style="min-height: 600px;margin-bottom: 600px;">
	<div class="container-fluid" style="margin-top: 30px;margin-bottom: 20px;">
		<h2 style="text-align: center;font-weight: bold;font-size: 26px;">DISTRIBUTION AREA</h2>
		
	</div>
	<div class="container-fluid" style="margin-bottom: 20px;">
		<img style="width: 100%;" src="{{asset('img/distributors.jpg')}}">
	</div>
	<div class="container-fluid distributors" style="">
		<div class="container-custom">
			<?php $total_lines = 1;
			 foreach ($distributors_provinces as $key => $province){
			 	 foreach ($province->cities as $key => $city) {
			 	 	 $total_lines++; 
			 	 }
			 	 $total_lines++; 
			 	 $total_lines++; 
			 }
			 $row = 5;
			 $coloumn_item = (int)($total_lines/$row)+1;
			 ?>
			<?php $lines = 1; ?>
			<div class="row">
				
				<div class="col-md-2 col-sm-2 col-xs-2 offset-xs--1 offset-md-1 offset-sm-1">
				<?php foreach ($distributors_provinces as $key => $province){ ?>
				
				<b style="color: #a8131d;">{{$province->province_name}}</b><br>
					<?php foreach ($province->cities as $key => $city) {?>
						
						<?php $lines++; ?>
						<?php if($lines%$coloumn_item==0){ ?>
							</div><div class="col-md-2 col-sm-2 col-xs-2">
						<?php } ?>
						<div style="vertical-align: middle;display: inline-block;">
							<div style="display: inline-block;border-radius: 50%;width: 5px;height: 5px;background-color: black;float: left;margin-bottom: 2px;"></div>
						</div>
						{{$city->city_name}}<br>
					<?php } ?>
					
					<?php $lines++; ?>
					<?php if($lines%$coloumn_item==0){ ?>
						</div><div class="col-md-2 col-sm-2 col-xs-2">
					<?php } ?>
					<br><?php $lines++; ?>
					<?php if($lines%$coloumn_item==0){ ?>
						</div><div class="col-md-2 col-sm-2 col-xs-2">
					<?php } ?>
				<?php } ?>

				</div>
			</div>		
		</div>
	</div>
</section>
@stop
@section('load_custom_css')


@stop
@section('load_custom_js')

@stop