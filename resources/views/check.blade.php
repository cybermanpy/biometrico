@extends('layouts.default')

@section('content')

	<table border="1">
		<tr>
			<th colspan="3"> {{ $users->name }} </th>
		</tr>
		<tr>
			<th> Fecha </th>
			<th> Descripción </th>
			<th> Hora </th>
		</tr>
			
			@foreach ($list as $check)

				<tr>
					<td> {{ date('l jS F Y', strtotime($check->checktime)) }} </td>
					@if (date('H:I:S', strtotime($check->checktime)) <= '09:00:00')
					<td style="background: red">Entrada</td>
					@elseif (date('H:I:S', strtotime($check->checktime)) >= '15:00:00')
					<td style="background: green">Salida</td>
					@endif
					<td> {{ date('G:ia', strtotime($check->checktime)) }} </td>
				</tr>

			@endforeach

	</table>

@stop