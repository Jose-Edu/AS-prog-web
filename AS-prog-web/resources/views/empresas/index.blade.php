@extends('layouts.base')

@section('content')
	@foreach($empresas as $empresa)
		<div>
			<h3>{{ $empresa->nome }}</h3>
			<p>Id: {{ $empresa->id }}</p>
			<a href="{{ url('empresas/'.$empresa->id.'/edit') }}">Edit</a>
			<form action="{{ url('empresas/'.$empresa->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>
			</form>
		</div>
	@endforeach
@endsection