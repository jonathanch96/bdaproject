@extends('master')

@section('contents')
<section style="min-height: 600px;margin-bottom: 600px;">
	<div class="container-fluid" style="margin-top: 50px;">
		<div class="container-custom">
			<button onclick="location.href='{{ url()->previous()}}'" type="button" class="btn btn-link">Back</button><h2>{{$product_data->product_model}}</h2>
		</div>
	</div>
	<hr>
	<div class="container-fluid">
		<div class="container-custom">
			<div class="row">
				<div class="col-md-5 offset-md-1">
					<img style="width: 100%;object-fit: contain;" src="{{asset('img/products')}}/{{$product_data->product_image}}">
				</div>
				<div class="col-md-6">
					<div style="margin-top: 15px;font-size: 20px;">{{$product_data->product_name}}</div>
					<div style="border-bottom: 1px solid #BBB;margin-top: 20px;">
						<div style="display: inline-block;border: 1px solid #BBB;border-radius:5px;border-bottom: 1px solid #FFF;padding: 5px 10px;">
							Description
						</div>
					</div>
					<div style="margin-top: 20px">
						{!!$product_data->product_description!!}
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

@stop
