@extends('layouts.base')
	
	@section('content')
		<form action="{{ url('carros/'.$carro->id) }}" method="POST">
			@csrf
			@method('PUT')
			<input type="text" name="modelo" placeholder="Modelo" value="{{ $carro->modelo }}" required>
			<input type="number" name="ano" placeholder="Ano" value="{{ $carro->ano }}" required>
            <label for="pessoa_id">Dono:</label>
            <select name="pessoa_id" id="pessoa_id" required>
                @foreach($pessoas as $pessoa)
                    @if($pessoa->id === $carro->pessoa->id)
                        <option value="{{ $pessoa->id }}" selected>{{ $pessoa->nome }}</option>
                    @else
                        <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                    @endif
                @endforeach
            </select>
			<button type="submit">Editar carro</button>
		</form>
	@endsection