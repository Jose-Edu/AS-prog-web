@extends('layouts.base')
	
	@section('content')
		<form action="{{ url('empresas'.$empresa->id) }}" method="POST">
			@csrf
			@method('PUT')
			<input type="text" name="nome" placeholder="Nome" value="{{ $empresa->nome }}" required>
			<button type="submit">Editar empresa</button>
		</form>
	@endsection