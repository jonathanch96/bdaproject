

@extends('master')

@section('contents')
<section style="min-height: 600px;margin-bottom: 600px;">
	<div class="container-fluid" style="padding-left: 0px;padding-right: 0px;">
		<img style="width: 100%;" src="{{asset('img/product_header.jpg')}}">
	</div>
	<div class="container-fluid" style="text-align: center;margin-top: 10px;">
	<?php $i=0; ?>
	<?php foreach ($brand_data->hasCategories as $key => $hasCategory) { ?>
		<?php if($i==0){ ?>
		<div class="product-tab" onclick="showTab('#product-{{str_replace(' ','',$hasCategory->category->category_name)}}',this.id)" id="tab-product-{{str_replace(' ','',$hasCategory->category->category_name)}}" style="">{{$hasCategory->category->category_name}}</div>
		<?php }else{ ?>
		<div class="product-tab" onclick="showTab('#product-{{str_replace(' ','',$hasCategory->category->category_name)}}',this.id)" id="tab-product-{{str_replace(' ','',$hasCategory->category->category_name)}}" style="border-left: 1px solid black;">{{$hasCategory->category->category_name}}</div>
		<?php } ?>
		<?php $i++; ?>
	<?php } ?>
	</div>
	<?php foreach ($brand_data->hasCategories as $key => $hasCategory) { ?>
	<div class="container-fluid sub-categories" style="display: none;" id="product-{{str_replace(' ','',$hasCategory->category->category_name)}}">
		<div class="container-fluid">
			<div class="container-fluid">
				<div class="container-custom" style="margin-top: 20px;">
					<h4>{{$hasCategory->category->category_name}}</h4>
				</div>
			</div>
				<?php foreach ($hasCategory->category->subCategories as $key => $sub) { ?>
				<?php $width_row_two = 86-strlen($sub->sub_categories_name); ?>
				<?php 
				$product_shows = $products->where('brand_id','=',$brand_data->id)->where('category_id','=',$hasCategory->category->id)->where('sub_category_id','=',$sub->id)->take(4);
				if(!$product_shows->isEmpty()){

			 ?>
					<div class="container-fluid" style="padding-left: 0px;padding-right: 0px;">
						<table style="width: 100%;margin-top:-10px;">
							<tr>
								<td style="border-bottom: 1px solid #BBB; width: 14%">&nbsp;</td>
								<td style="vertical-align:middle;text-align:center" rowspan="2">{{$sub->sub_categories_name}}</td>
								<td style="border-bottom: 1px solid #BBB; width: {{$width_row_two}}%">&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
						</table>
					</div>
					
					<div class="container-fluid" style="margin-bottom: 50px;">
						<div class="container-custom">
							<div class="row">
								<?php foreach ($product_shows as $key => $product_show) { ?>
								
									<div class="col-md-3 products" style="padding-top: 10px;padding-bottom: 10px;">
									<a href="{{url('')}}/detail_product/{{$product_show->id}}">
										<div class="" style="background-color: white;">
											<img style="width: 100%;height:150px;object-fit: contain;" src="{{asset('img/products')}}/{{$product_show->product_image}}">
										</div>
										<div style="text-align: center;"><b>{{$product_show->product_model}}</b></div>
										<div class="products-desc" style="">{{$product_show->product_name}}</div>
									</a>
									</div>
							
								<?php } ?>
							</div>
							<div class="products-view-all" onclick="location.href='{{url('').'/products/'.$brand_data->brand_name}}/{{$sub->sub_categories_name}}'" style="">View All</div>
						</div>
					</div>
				<?php } ?>

			<?php } ?>
		</div>
	</div>
	<?php } ?>

	
</section>
@stop
@section('load_custom_css')
<style type="text/css">
	.products a{
		color: black;
		text-decoration: none;

	}
	.products a:hover{
		color: white;

	}
</style>

@stop
@section('load_custom_js')
<script type="text/javascript">
	$("#product-{{str_replace(' ','',$brand_data->hasCategories[0]->category->category_name)}}").show();
	$("#tab-product-{{str_replace(' ','',$brand_data->hasCategories[0]->category->category_name)}}").css({'color':'#a8131d','font-weight':'bold'});
	function showTab(selector,thisId){
		$(".product-tab").css({'color':'black','font-weight':'normal'});
		$(".sub-categories").fadeOut(200);
		$(selector).fadeIn(200);
		$("#"+thisId).css({'color':'#a8131d','font-weight':'bold'});
		
	}
</script>
@stop