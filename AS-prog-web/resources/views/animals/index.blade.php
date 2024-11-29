@extends('layouts.base')

@section('content')
	@foreach($animals as $animal)
		<div>
			<h3>{{ $animal->nome }}</h3>
			<p>Espécie: {{ $animal->especie }}</p>
			<a href="{{ url('animals/'.$animal->id.'/edit') }}">Edit</a>
			<form action="{{ url('animals/'.$animal->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>
			</form>
		</div>
	@endforeach
@endsection