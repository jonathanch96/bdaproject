@extends('master')

@section('contents')
<section style="min-height: 600px;margin-bottom: 600px;">
	<div class="container-fluid">
		<div class="container-custom">
			<h2 style="text-align: center;">All Brands</h2>
		</div>
		<div class="container-custom">
			<table style="width: 500px;margin:0 auto 0 auto; ">
				<tr>
					<th>Brand Name</th>
					<th colspan="2">Action</th>
				</tr>
				<?php foreach ($brands as $key => $brand) { ?>
				<tr>
					<form method="post" action="{{url('')}}/manage_brands_edit_brand/{{$brand->id}}">
               		 {{ csrf_field() }}

					<td><input type="text" value="{{$brand->brand_name}}" name="brand_name"></td>
					<td><button class="button-bda" style="font-size: 10px;">Edit</button></td>
					</form>
					<td><a onclick="return confirm('Are you sure?')" href="{{url('')}}/manage_brands_delete/{{$brand->id}}}">Delete</a></td>
				</tr>
				<?php } ?>
			</table>

			<form style="width: 500px;margin: 0 auto 0 auto;margin-top: 20px;" action="{{url('')}}/manage_brands_add_new" method="post">
                {{ csrf_field() }}
				<input type="text" name="brand_name" placeholder="Input Brand Name">
				<button style="font-size: 10px;" class="button-bda">Add New Brand</button>
			</form>
			<div style="width: 500px;margin: 0 auto 0 auto;">
		  	@if ($errors->has('brand_name'))
				<div class="errors">
                    <strong>{{ $errors->first('brand_name') }}</strong>
				</div>
            @endif
            </div>
				
		</div>
		<div class="container-custom" style="margin-top: 50px;">
			<h2  style="text-align: center;">Category per Brand</h2>
		</div>
		<div class="container-custom">
			<table style="width: 800px;margin:0 auto 0 auto; ">
				<tr>
					<th>Brand Name</th>
					<th>Category</th>
					<th>Action</th>
				</tr>
			<?php foreach ($brands as $key => $brand) { ?>
				<tr style="vertical-align: text-top;">
					<td>{{$brand->brand_name}}</td>
					<td style="width: 400px;">
						<ul>
							<?php foreach ($brand->hasCategories as $key => $hasCategory){ ?>
								<li>
									{{$hasCategory->category->category_name}}
									<div style="float: right;margin-right: 100px;"><a onclick="return confirm('Are you sure?')" href="{{url('')}}/manage_brands_delete_has_category/{{$hasCategory->id}}">Delete</a></div>
								</li>
							<?php } ?>
						</ul>
					</td>
					<td style="height: 100px;">
						<form action="{{url('')}}/manage_brands_add_new_has_category/{{$brand->id}}" method="post">
               				 {{ csrf_field() }}
							<select name="has_category">
								<option value="">Choose Category</option>
								<?php foreach ($categories as $key => $category): ?>
									<?php $exists=false; ?>
									<?php foreach ($brand->hasCategories as $key => $hasCategory){ ?>
										<?php if($hasCategory->category->category_name==$category->category_name){ ?>
											<?php $exists = true; ?>
										<?php } ?>
									<?php } ?>
									<?php if(!$exists){ ?>
									<option value="{{$category->id}}">{{$category->category_name}}</option>
									<?php } ?>

								<?php endforeach ?>
							</select><br>
							<button style="font-size: 10px;" class="button-bda">Add Category</button>
							
						</form>
					</td>
				</tr>
			<?php } ?>
			</table>
			<div style="width: 500px;margin: 0 auto 0 auto;">
			@if ($errors->has('has_category'))
				<div class="errors">
                    <strong>{{ $errors->first('has_category') }}</strong>
				</div>
            @endif
        	</div>
		</div>

	</div>
</section>
@stop
@section('load_custom_css')

@stop
@section('load_custom_js')

@stop