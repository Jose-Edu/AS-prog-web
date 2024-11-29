@extends('layouts.base')

@section('content')
	@foreach($pedidos as $pedido)
		<div>
			<h3>{{ $livro->codigo }}</h3>
			<p>Id: {{ $livro->id }}</p>
			<a href="{{ url('pedidos/'.$pedido->id.'/edit') }}">Edit</a>
			<form action="{{ url('pedidos/'.$pedido->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>
			</form>
		</div>
	@endforeach
@endsection