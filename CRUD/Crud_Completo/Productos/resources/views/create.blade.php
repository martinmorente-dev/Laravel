@extends('templates.home')

@section('header')
	<title>Create Product</title>
	<link rel="stylesheet" href="{{asset('css/style-update.css')}}">
@endsection

@section('content')
	<h1>Insert products</h1>
	<div>
		<form method="POST" action="{{route('product.create')}}">
			@csrf
			<input type="text" name="name" placeholder="Product name: " />
			<input type="text" name="description" placeholder="Product Description: ">
			<input type="text" name="price" placeholder="Product price: ">
			<input type="submit" id="send_btn">
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
	</div>
	<div id="ul-list">
		<ul>
			@foreach ($list_product as $list_products)
			<li>{{$list_products->name}}</li>
				<a href="{{route('product.edit', $list_products->id) }}"><img src="{{asset('img/update.png')}}" alt="imagen"></a>
				<div class="list">
						<form action="{{route('product.delete',$list_products->id )}}" method="POST">
							@csrf
							@method('DELETE')
							<input type="submit" value="Delete" id="delete">
							<button><a href="{{route('product.detail', $list_products->id)}}">Details</a></button>
						</form>
				</div>
			@endforeach
		</ul>
	</div>
@endsection