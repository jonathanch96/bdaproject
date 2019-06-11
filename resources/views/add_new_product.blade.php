@extends('master')

@section('contents')
<section style="min-height: 600px;margin-bottom: 600px;">
	<div class="container-fluid">
		<div class="container-custom">
			<div class="row">
		        <div class="col-md-8">
		            <div class="panel panel-default">
		                <div class="panel-heading" style="margin-bottom: 20px;"><h2>Add New Product</h2></div>

		                <div class="panel-body">
		                    <form class="form-horizontal" method="POST" action="{{url('')}}/add_new_product" enctype="multipart/form-data" runat="server">
		                        {{ csrf_field() }}

		                        <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
		                            <label for="name" class="col-md-4 control-label">Product Name</label>

		                            <div class="col-md-6">
		                                <input id="name" type="text" class="form-control" name="product_name" value="{{ old('name') }}" required autofocus>

		                                @if ($errors->has('product_name'))
		                                    <span class="errors help-block">
		                                        <strong>{{ $errors->first('product_name') }}</strong>
		                                    </span>
		                                @endif
		                            </div>

		                        </div>
		                         <div class="form-group{{ $errors->has('product_model') ? ' has-error' : '' }}">
		                            <label for="model" class="col-md-4 control-label">Product Model</label>

		                            <div class="col-md-6">
		                                <input id="model" type="text" class="form-control" name="product_model" value="{{ old('name') }}" required autofocus>

		                                @if ($errors->has('product_model'))
		                                    <span class="errors help-block">
		                                        <strong>{{ $errors->first('product_model') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                            
		                        </div>
		                        <div class="form-group{{ $errors->has('product_description') ? ' has-error' : '' }}">
		                            <label for="description" class="col-md-4 control-label">Product Description</label>

		                            <div class="col-md-6">
		                                
		                                <textarea style="resize: none;height: 150px;width: 100%;" id="description" name="product_description" value="{{ old('name') }}" required autofocus></textarea>
		                                @if ($errors->has('product_description'))
		                                    <span class="errors help-block">
		                                        <strong>{{ $errors->first('product_description') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                            
		                        </div>
		                         <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
		                            <label for="image" class="col-md-4 control-label">Product Image</label>

		                            <div class="col-md-6">
		                            	<div style="text-align: center; margin-bottom: 20px;">
		                            		<img id="preview-image" src="{{asset('img/upload.png')}}" style="margin-top: 30px;">
		                            	</div>
		                                <input id="myImage" name="myImage" type="file" class="form-control" accept="image/*" required autofocus>

		                                @if ($errors->has('myImage'))
		                                    <span class="errors help-block">
		                                        <strong>{{ $errors->first('myImage') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                         <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
		                            <label for="brand" class="col-md-4 control-label">Brand</label>

		                            <div class="col-md-6">
		                                
		                                <select onchange="showCategory('choice_'+this.value)" id="brand" class="form-control" name="brand" required>
		                                	<option value="">Choose Brand</option>
		                                	<?php foreach ($brands as $key => $brand): ?>
		                                		<option value="{{$brand->id}}">{{$brand->brand_name}}</option>
		                                	<?php endforeach ?>
		                                </select>

		                                @if ($errors->has('brand'))
		                                    <span class="errors help-block">
		                                        <strong>{{ $errors->first('brand') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                         <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
		                            <label for="category" class="col-md-4 control-label">Category</label>

		                            <div class="col-md-6">
		                                
		                                <select onchange="showSubCategory('subChoice_'+this.value)" id="category" class="form-control" name="category" required>
		                                	<option value="">Choose Category</option>
		                                	<?php foreach ($brands as $key => $brand): ?>
		                                		<?php foreach ($brand->hasCategories as $key => $category): ?>
		                                			<option value="{{$category->category->id}}" class="category_choice choice_{{$brand->id}}"  style="display: none;">{{$category->category->category_name}}</option>
		                                			
		                                		<?php endforeach ?>
		                                	<?php endforeach ?>
		                                </select>

		                                @if ($errors->has('category'))
		                                    <span class="errors help-block">
		                                        <strong>{{ $errors->first('category') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                         <div class="form-group{{ $errors->has('subcategory') ? ' has-error' : '' }}">
		                            <label for="subcategory" class="col-md-4 control-label">Subcategory</label>

		                            <div class="col-md-6">
		                                
		                                <select id="subcategory" class="form-control" name="subcategory" required>
		                                	<option value="">Choose Subcategory</option>
		                                	<?php foreach ($categories as $key => $category): ?>
		                                		<?php foreach ($category->subCategories as $key => $subcategory): ?>
		                                			<option class="subcategory_choice subChoice_{{$category->id}}" style="display: none;" value="{{$subcategory->id}}">{{$subcategory->sub_categories_name}}</option>
		                                			
		                                		<?php endforeach ?>
		                                	<?php endforeach ?>
		                                </select>

		                                @if ($errors->has('subcategory'))
		                                    <span class="errors help-block">
		                                        <strong>{{ $errors->first('subcategory') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>



		                        

		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button type="submit" class="btn btn-primary">
		                                    Add
		                                </button>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</section>
@stop
@section('load_custom_css')

@stop
@section('load_custom_js')
<script type="text/javascript" src="{{asset('js/preview-img.js')}}"></script>

<script type="text/javascript">
	$("#myImage").change(function(){
		$("#preview-image").height("150px");
		readURL(this);
	});
	function showCategory(selector){
		$(".category_choice").hide();
		$("."+selector).show();
	}
	function showSubCategory(selector){
		$(".subcategory_choice").hide();
		$("."+selector).show();
	}
</script>
@stop