@extends('layouts.default')

@section('content')

<form action=" {{ route('formcheck_store_path') }} " method="post">
	{{ csrf_field() }}
	<p>Cedula:
	<input class="bases_buscador" type="text" name="id"></p>
	<p>Mes:
		<select name="month">
			@foreach($meses as $mes)
			<option value="{{ $mes }}">{{ $mes }}</option>
			@endforeach
		</select>
	</p>
	<p><input type="submit" value="Consultar"></p>
</form>

@stop