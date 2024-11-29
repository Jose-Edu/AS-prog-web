@extends('layouts.base')
	
@section('content')
    <form action="{{ url('empresas') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome" required>
        <button type="submit">Criar empresa</button>
    </form>
@endsection
