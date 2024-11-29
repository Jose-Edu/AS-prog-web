@extends('layouts.base')
	
@section('content')
    <form action="{{ url('pessoas') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="number" name="idade" placeholder="Idade" required>
        <button type="submit">Criar pessoa</button>
    </form>
@endsection
