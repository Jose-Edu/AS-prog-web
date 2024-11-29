@extends('layouts.base')
	
	@section('content')

		<form class="max-w-sm mx-auto" action="{{ url('livros/'.$livro->id) }}" method="POST">
			@csrf
			@method('PUT')

			<h1 class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white mb-5">Editar Livro:</h1>
			<div class="mb-5">
				<input type="text" id="titulo" name="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Título" value="{{ $livro->titulo }}" required />
			</div>
			<div class="mb-5">
				<input type="text" id="autor" name="autor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Autor" value="{{ $livro->autor }}" required />
			</div>
			<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
    	</form>
	@endsection