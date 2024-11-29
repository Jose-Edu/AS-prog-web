@extends('layouts.base')

@section('content')
	@foreach($carros as $carro)
		<div>
			<h3>{{ $carro->modelo }}</h3>
			<p>Ano: {{ $carro->ano }}</p>
            <p>Dono: {{ $carro->pessoa->nome }}</p>
			<a href="{{ url('carros/'.$carro->id.'/edit') }}">Edit</a>
			<form action="{{ url('carros/'.$carro->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>
			</form>
		</div>
	@endforeach
@endsection