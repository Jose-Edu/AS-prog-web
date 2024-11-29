@extends('layouts.base')

@section('content')
	<a class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 ms-2" href="{{url('empresas/create')}}">Create</a>

	<div class="mt-5">
		@foreach($empresas as $empresa)
			<div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 ms-2 mb-5">
				<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $empresa->nome }}</h5>
				<p class="font-normal text-gray-700 dark:text-gray-400">Id: {{ $empresa->id }}</p>
				<br>
				<a  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{ url('empresas/'.$empresa->id.'/edit') }}">Edit</a>
				<br><br>
				<form action="{{ url('empresas/'.$empresa->id) }}" method="POST">
					@csrf
					@method('DELETE')
					<button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="submit">Delete</button>
				</form>
			</div>
		@endforeach
	</div>
@endsection