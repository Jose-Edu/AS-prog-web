@extends('layouts.base')

@section('content')
	@foreach($livros as $livro)
		<div>
			<h3>{{ $livro->titulo }}</h3>
			<p>Autor: {{ $livro->autor }}</p>
			<a href="{{ url('livros/'.$livro->id.'/edit') }}">Edit</a>
			<form action="{{ url('livros/'.$livro->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>
			</form>
		</div>
	@endforeach
@endsection