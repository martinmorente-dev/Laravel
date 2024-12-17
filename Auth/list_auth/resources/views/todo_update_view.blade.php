<x-app-layout>
	<div id="container">
		<h1>Update {{$product->title}}</h1>
		<title>Actualizar</title>
		<form action="{{route('todo.update', $product->id)}}" method="POST">
			@csrf
			@method('PUT')
			<input type="text" name="title" value="{{$product->title}}">
			<input type="submit" value="Send" class="button">
		</form>
		@error('title')
			<p>{{$message}}</p>
		@enderror
		<button class="button"><a href="{{route('todo.lista')}}">Back</a></button>
	</div>
</x-app-layout>


<style>
	#container
	{
		width: 100%;
		justify-content: center;
		align-items: center;
		padding-top: 150px;
		display: flex;
		flex-direction: column;
	}
	form
	{
		padding: 20px;
	}
	.button
	{
		background-color: grey;
		margin-top: 7px;
		color: white;
		width: 60px;
		height: 30px;
		border-radius: 10px;
		margin-left: 5px;
		padding: 2px;
	}
	.button:hover
	{
		cursor: pointer;
		transform: scale(1.2);
		transition: 0.5s;
	}
</style>