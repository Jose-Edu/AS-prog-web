@extends('layouts.base')
	
@section('content')
    <form action="{{ url('carros') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="number" name="ano" placeholder="Ano" required>
        <label for="pessoa_id">Dono:</label>
            <select name="pessoa_id" id="pessoa_id" required>
                <option value="">Selecione um dono</option>
                @foreach($pessoas as $carro)
                    <option value="{{ $carro->id }}">{{ $carro->nome }}</option>
                @endforeach
        </select>
        <button type="submit">Criar carro</button>
    </form>
@endsection
