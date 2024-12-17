
<x-app-layout>
	<div id="container">
		<h1>List</h1>

		<form action="{{route('todo.create')}}" method="POST">
			@csrf
			<input type="text" name="title" placeholder="Introduce a title">
			<input type="submit" class="button" value="Send">
		</form>
		@error('title')
			<p>{{$message}}</p>
		@enderror
		<ul>
		@foreach ($categories as $category)
			<li>{{$category->title}}</li>
			<div id="container_buttons">
				<button class="button"><a href="{{route('todo.update_view',$category->id)}}">Update</a></button>
				<form action="{{route('todo.delete', $category->id)}}" method="POST">
					@csrf
					@method('DELETE')
					<input type="submit" value="Delete" class="button">
				</form>
			</div>
		@endforeach
		</ul>
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
		flex-direction: column
	}
	ul
	{
		display: flex;
		flex-direction: column;
		gap:10px;
		margin-top: 20px;
		background-color: rgb(221, 221, 221);
		width: 300px;
		padding: 50px;
		border-radius: 20px;
	}
	li
	{
		width: 100px;
		border-radius: 30%;
		color: black;
		height: 30px;
		padding: 5px;
		margin-top:10px;
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
	#container_buttons
	{
		display: flex;
		gap:10px;
	}
</style>