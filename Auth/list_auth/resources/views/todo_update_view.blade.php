<x-app-layout>
		<h1>Actualizar</h1>
		<title>Actualizar</title>
		<form action="{{route('todo.update')}}" method="POST">
			@csrf
			@method('PUT')
			<p>Titulo:</p>
			<input type="text" name="title" value="{{$product->title}}">
			<input type="submit" value="Enviar">
		</form>
		@error('title')
			<p>{{$message}}</p>
		@enderror
</x-app-layout>
