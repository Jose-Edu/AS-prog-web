@extends('layouts.base')
	
@section('content')
    <form action="{{ url('pedidos') }}" method="POST">
        @csrf
        <input type="text" name="codigo" placeholder="Código" required>
        <button type="submit">Criar pedido</button>
    </form>
@endsection
