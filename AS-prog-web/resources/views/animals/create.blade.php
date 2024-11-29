@extends('layouts.base')
	
@section('content')
    <form action="{{ url('animals') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="especie" placeholder="Espécie" required>
        <button type="submit">Criar animal</button>
    </form>
@endsection
