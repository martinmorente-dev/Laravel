
<x-app-layout>
	<h1>List</h1>

	<form action="{{route('todo.create')}}" method="POST">
		@csrf
		<input type="text" name="title" placeholder="Introduce un titulo">
		<input type="submit" placeholder="Enviar">
	</form>
	@error('title')
		<p>{{$message}}</p>
	@enderror
	<ul>
	@foreach ($categories as $category)
		<li>{{$category->title}}</li>
		<a href="{{route('todo.update_view',$category->id)}}">Actualizar</a>
		<form action="{{route('todo.delete', $category->id)}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" value="Borrar">
		</form>
	@endforeach
	</ul>
</x-app-layout>
