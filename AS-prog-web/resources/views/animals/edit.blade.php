@extends('layouts.base')
	
	@section('content')
		<form action="{{ url('animals'.$animal->id) }}" method="POST">
			@csrf
			@method('PUT')
			<input type="text" name="nome" placeholder="Nome" value="{{ $animal->nome }}" required>
			<input type="text" name="especie" placeholder="Espécie" value="{{ $animal->especie }}" required>
			<button type="submit">Editar animal</button>
		</form>
	@endsection