@extends('master')

@section('contents')
<section style="min-height: 600px;margin-top: 0px;margin-bottom: 600px;">
	<div class="container-fluid" style="padding-left: 0px;padding-right: 0px;margin-bottom: 20px;">
		<img style="width: 100%;" src="{{asset('img/all_product_header.png')}}">
	</div>
	<div class="container-fluid" style="margin-top: 30px;">
		<div class="container-custom" style="margin-bottom: 20px;font-size: 20px;">
			<h2 style="">{{$sub_category_data->sub_categories_name}}</h2>
		</div>
		<div class="container-custom">
			<div class="row">
				
				<?php foreach ($products as $key => $product) { ?>
					<div onclick="location.href='{{url('')}}/detail_product/{{$product->id}}'" class="col-md-3 all-products" onmouseout="removeSeeDetail()" onmouseover="showSeeDetail('#all-product-see-detail{{$product->id}}')" style="padding-bottom: 20px;padding-top: 20px;">
						<div class="">
							<img style="width: 100%;height:150px;object-fit: contain;" src="{{asset('img/products')}}/{{$product->product_image}}">
						</div>
						<div style="text-align: center;"><b>{{$product->product_model}}</b></div>
						<div class="products-desc" style="">{{$product->product_name}}</div>
						<div style="margin-top: 10px;text-align: center;margin-bottom: 10px;height: 42px;"><button id="all-product-see-detail{{$product->id}}" style="font-size: 12px;display: none;" class="button-bda">See Detail</button></div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	
</section>
@stop
@section('load_custom_css')

@stop
@section('load_custom_js')
<script type="text/javascript">
	function showSeeDetail(selector){
		$(selector).show();
	}
	function removeSeeDetail(){
		$(".button-bda").hide();
	}
</script>
@stop