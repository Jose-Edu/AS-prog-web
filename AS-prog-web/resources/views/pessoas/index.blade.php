@extends('layouts.base')

@section('content')
	@foreach($pessoas as $pessoa)
		<div>
			<h3>{{ $pessoa->nome }}</h3>
			<p>Ano: {{ $pessoa->idade }}</p>
			<a href="{{ url('pessoas/'.$pessoa->id.'/edit') }}">Edit</a>
			<form action="{{ url('pessoas/'.$pessoa->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>
			</form>
		</div>
	@endforeach
@endsection