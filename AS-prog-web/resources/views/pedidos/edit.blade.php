@extends('layouts.base')
	
	@section('content')
		<form action="{{ url('pedidos'.$pedido->id) }}" method="POST">
			@csrf
			@method('PUT')
			<input type="text" name="codigo" placeholder="Código" value="{{ $pedido->codigo }}" required>
			<button type="submit">Editar pedido</button>
		</form>
	@endsection