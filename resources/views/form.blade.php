@extends('layouts.default')

@section('content')

<form action=" {{ route('form_store_path') }} " method="post">
	{{ csrf_field() }}
	Cedula:
	<input class="bases_buscador" type="text" name="id">
	<p>
	<input type="submit" value="Consultar">
	</p>
</form>

@stop