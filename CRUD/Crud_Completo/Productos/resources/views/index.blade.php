@extends('templates.home')

@section('header')
	<title>Index</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
	<header>
		<nav id="pag">
			<ul>
				<li><a href="{{route('product.list')}}">Add product</a></li>
			</ul>
		</nav>
	</header>
@endsection