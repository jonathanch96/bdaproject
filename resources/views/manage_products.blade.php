@extends('master')

@section('contents')
<section style="min-height: 600px;margin-bottom: 600px;">
	<div class="container-fluid">
		<h3 style="text-align: center; margin-top: 20px;">All Product</h3>
		<table style="width: 1000px;margin: 0 auto 0 auto;">
			<tr style="text-align: center;">
				<th>Brand</th>
				<th>Category</th>
				<th>Sub Category</th>
				<th>Model</th>
				<th>Name</th>
				<th>Description</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
			<?php $count_product=0; ?>
			<?php foreach ($products as $key => $product): ?>
			<tr>
				<td>{{$product->brand->brand_name}}</td>
				<td>{{$product->category->category_name}}</td>
				<td>{{$product->subCategory->sub_categories_name}}</td>
				<td><a href="{{url('')}}/detail_product/{{$product->id}}">{{$product->product_model}}</a></td>
				<td>{{$product->product_name}}</td>
				<td>{!!$product->product_description!!}</td>
				<td style="text-align: center;"><img style="height: 100px;width: 150px;object-fit: contain;" src="{{asset('img/products')}}/{{$product->product_image}}"></td>
				<td>
					<button onclick="location.href='{{url('')}}/edit_products/{{$product->id}}'">Edit</button>
					<a onclick="return confirm('Are you sure?')" href="{{url('')}}/manage_products_delete_{{$product->id}}">Delete</a>
				</td>
				
			</tr>
			<?php $count_product++; ?>
			<?php endforeach ?>
		</table>
		<div style="text-align: center;margin-top: 20px;">Product Count : {{$count_product}}</div>
		<div style="text-align: center;margin-top: 20px;">
			<h4>Filter</h4>
			<div>
				<form action="{{url('')}}/manage_products" method="post">
				 {{ csrf_field() }}
				<select id="brand" name="brand">
					<option value="0">Pilih Brand</option>
					<?php foreach ($brands as $key => $brand): ?>
						<option value="{{$brand->id}}">{{$brand->brand_name}}</option>
					<?php endforeach ?>
				</select>
				<select id="category" name="category">
					<option value="0">Pilih Category</option>
					<?php foreach ($categories as $key => $category): ?>
						<option value="{{$category->id}}">{{$category->category_name}}</option>
					<?php endforeach ?>
				</select>
				<select id="sub_category" name="sub_category">
					<option value="0">Pilih Sub Category</option>
					<?php foreach ($subCategories as $key => $subCategory): ?>
						<option value="{{$subCategory->id}}">{{$subCategory->sub_categories_name}}</option>
					<?php endforeach ?>
				</select><br>
				<button class="button-bda">Apply</button>
				</form>
			</div>
		</div>
		
		<div style="text-align:center; margin-top:30px;">
			<button onclick="window.open('{{url('')}}/add_new_product','_blank')" class="button-bda">Add New Product</button>
		</div>
	</div>
</section>
@stop
@section('load_custom_css')
<style type="text/css">
	table,td,tr,th{
		border:1px solid;
	}
	th{
		width: 12.5%;
	}
</style>
@stop
@section('load_custom_js')
<script type="text/javascript">
	<?php if(isset($old_data)){ ?>
	$("#brand").val('{{$old_data['brand']}}');
	$("#category").val('{{$old_data['category']}}');
	$("#sub_category").val('{{$old_data['sub_category']}}');
	<?php } ?>
</script>
@stop