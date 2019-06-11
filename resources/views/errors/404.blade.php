<?php 
use App\Model\Brand;
$brands = Brand::all();
 ?>
@extends('master')

@section('contents')
<section style="min-height: 600px;margin-bottom: 600px;">
	<div style="text-align: center;margin-top: 50px;font-size: 25px;">Oops Page Not Found</div>
</section>
@stop
@section('load_custom_css')

@stop
@section('load_custom_js')

@stop