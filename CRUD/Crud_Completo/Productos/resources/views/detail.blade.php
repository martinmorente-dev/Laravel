@extends('templates.home')

@section('header')
	<link rel="stylesheet" href="{{asset('css/style-detail.css')}}">
@endsection

@section('content')
	<h1>Details</h1>
	<ul>
		@foreach ($list_product as $list_products)
			<li>{{$list_products->name}}</li>
			<li>{{$list_products->description}}</li>
			<li>{{$list_products->price}}</li>
		@endforeach
	</ul>
@endsection