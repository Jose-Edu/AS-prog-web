@extends('layouts.base')
	
@section('content')
    <form action="{{ url('livros') }}" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <button type="submit">Criar livro</button>
    </form>
@endsection
