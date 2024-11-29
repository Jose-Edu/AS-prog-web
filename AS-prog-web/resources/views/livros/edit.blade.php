@extends('layouts.base')
	
	@section('content')
		<form action="{{ url('livros'.$livro->id) }}" method="POST">
			@csrf
			@method('PUT')
			<input type="text" name="nome" placeholder="Nome" value="{{ $livro->nome }}" required>
			<input type="text" name="autor" placeholder="Autor" value="{{ $livro->autor }}" required>
			<button type="submit">Editar livro</button>
		</form>
	@endsection