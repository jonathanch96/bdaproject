@extends('master')

@section('contents')
<section style="min-height: 600px;margin-bottom: 600px;">
	<div class="container-fluid">
		<div class="container-custom">
			<h2 style="text-align: center;">All Categories</h2>
		</div>
		<div class="container-custom">
			<table style="width: 500px;margin:0 auto 0 auto; ">
				<tr>
					<th>Brand Name</th>
					<th colspan="2">Action</th>
				</tr>
				<?php foreach ($categories as $key => $category) { ?>
				<tr>
					<form method="post" action="{{url('')}}/manage_categories_edit_category/{{$category->id}}">
               		 {{ csrf_field() }}
               		 <?php if($category->id!=999){ ?>
						<td><input type="text" value="{{$category->category_name}}" name="category_name"></td>
						
						<td><button class="button-bda" style="font-size: 10px;">Edit</button></td>
						<td><a onclick="return confirm('Are you sure?')" href="{{url('')}}/manage_categories_delete/{{$category->id}}">Delete</a></td>
					<?php }else{ ?>
					<td>{{$category->category_name}}</td>
					<td></td>
					<td></td>
					<?php } ?>
					</form>

				</tr>
				<?php } ?>
			</table>

			<form style="width: 500px;margin: 0 auto 0 auto;margin-top: 20px;" action="{{url('')}}/manage_categories_add_new" method="post">
                {{ csrf_field() }}
				<input type="text" name="category_name" placeholder="Input Category Name">
				<button style="font-size: 10px;" class="button-bda">Add New Category</button>
			</form>
			<div style="width: 500px;margin: 0 auto 0 auto;">
		  	@if ($errors->has('category_name'))
				<div class="errors">
                    <strong>{{ $errors->first('category_name') }}</strong>
				</div>
            @endif
            </div>
				
		</div>
		<div class="container-custom" style="margin-top: 50px;">
			<h2  style="text-align: center;">Sub Category</h2>
		</div>
		<div class="container-custom">
			<table style="width: 800px;margin:0 auto 0 auto; ">
				<tr>
					<th>Category</th>
					<th>Sub Category</th>
					<th>Action</th>
				</tr>
			<?php foreach ($categories as $key => $category) { ?>
				<tr style="vertical-align: text-top;">
					<td>{{$category->category_name}}</td>
					<td style="width: 500px;">
						<ul>
							<?php foreach ($category->subCategories as $key => $subCategory){ ?>
								<li>
									<form style="" action="{{url('')}}/manage_categories_edit_sub_category/{{$subCategory->id}}" method="post">
									 {{ csrf_field() }}
									<input value="{{$subCategory->sub_categories_name}}" name="sub_categories_name" type="text">
									<div style="float: right;margin-right: 100px;">
										<button class="button-bda" style="font-size: 14px;padding-top: 0px;padding-bottom: 0px;margin-right: 30px;">Edit</button>
										<a onclick="return confirm('Are you sure?')" href="{{url('')}}/manage_brands_delete_sub_category/{{$subCategory->id}}">Delete</a>
									</div>
									</form>
								</li>
							<?php } ?>
						</ul>
					</td>
					<td style="height: 100px;">
						<form action="{{url('')}}/manage_categories_add_new_sub_category/{{$category->id}}" method="post">
               				 {{ csrf_field() }}
               				 <input type="text" name="sub_category" placeholder="Input Sub Category">
							<br>
							<button style="font-size: 10px;" class="button-bda">Add Sub Category</button>
							
						</form>
					</td>
				</tr>
			<?php } ?>
			</table>
			<div style="width: 500px;margin: 0 auto 0 auto;">
			@if ($errors->has('sub_category'))
				<div class="errors">
                    <strong>{{ $errors->first('sub_category') }}</strong>
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