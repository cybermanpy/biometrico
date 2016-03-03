@extends('layouts.default')

@section('content')

<form action=" {{ route('form_store_path') }} " method="post">
	{{ csrf_field() }}
	Cedula:
	<input type="text" name="id">
	<input type="submit" value="Consultar">
</form>

@stop