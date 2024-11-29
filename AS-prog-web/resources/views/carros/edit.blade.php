@extends('layouts.base')
	
	@section('content')
		<form action="{{ url('carros'.$carro->id) }}" method="POST">
			@csrf
			@method('PUT')
			<input type="text" name="nome" placeholder="Nome" value="{{ $carro->modelo }}" required>
			<input type="number" name="ano" placeholder="Ano" value="{{ $carro->ano }}" required>
            <label for="pessoa_id">Trainer</label>
            <select name="pessoa_id" id="pessoa_id" required>
                @foreach($pessoas as $carro)
                    @if($carro->id === $carro->pessoa->id)
                        <option value="{{ $carro->id }}">{{ $carro->name }} selected></option>
                    @else
                        <option value="{{ $carro->id }}">{{ $carro->name }}</option>
                    @endif
                @endforeach
            </select>
			<button type="submit">Editar carro</button>
		</form>
	@endsection