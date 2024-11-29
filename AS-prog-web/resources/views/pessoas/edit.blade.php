@extends('layouts.base')
	
	@section('content')
		<form action="{{ url('pessoas'.$pessoa->id) }}" method="POST">
			@csrf
			@method('PUT')
			<input type="text" name="nome" placeholder="Nome" value="{{ $pessoa->nome }}" required>
			<input type="number" name="idade" placeholder="Idade" value="{{ $pessoa->idade }}" required>
			<button type="submit">Editar pessoa</button>
		</form>
	@endsection