@extends('templates.home')

@section('header')
	<title>Update Product</title>
	<link rel="stylesheet" href="asset{{'css/style-update.css'}}">
@endsection

@section('content')
	<h1>Update product {{$product->name}}: </h1>
	<form action="{{route('product.update', $product->id)}}" method="POST">
		@method('PUT')
		@csrf
		<p>name:</p>
		<input type="text" name="name" value="{{$product->name}}"/>
		<p>description:</p>
		<input type="text" name="description" value="{{$product->description}}"/>
		<p>price:</p>
		<input type="text" name="price" value="{{$product->price}}"/>
		<input type="submit" placeholder="Update">
	</form>
	@if ($errors->any()) 
			<div> 
				<ul> 
					@foreach ($errors->all() as $error) 
						<li class="error">{{ $error }}</li> 
					@endforeach 
			 	</ul> 
			</div> 
		@endif
@endsection