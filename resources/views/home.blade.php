@extends('layouts.default')

@section('content')
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Ficha</th>
			<th>Cedula</th>
			<th>Nombre</th>
		</tr>
		@foreach($users as $user)
			<tr>
				<td><a href="{{ route('check_show_path', $user->userid) }}"> {{ $user->userid }} </a></td>
				<td> {{ $user->badgenumber }} </td>
				<td> {{ $user->ssn }} </td>
				<td><a href="{{ route('check_show_path', $user->userid) }}"> {{ $user->name }} </a></td>
			</tr>
		@endforeach
	</table>

@stop