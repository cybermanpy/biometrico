@extends('layouts.default')

@section('content')

	<!-- <table border="1">
		<tr>
			<th colspan="3"> {{ $name }} </th>
		</tr>
		<tr>
			<th> Fecha </th>
			<th> Entrada </th>
			<th> Salida </th>
		</tr>
			@foreach ($list_check as $key => $check)
				<tr>
					<td>{{ $dias[date('w', strtotime($check->checktime))] }} 
						{{ date('d', strtotime($check->checktime)) }} de 
						{{ $meses[date('n', strtotime($check->checktime))-1] }} de 
						{{ date('Y', strtotime($check->checktime)) }}
					</td>
					<td>
						@if (date('H:I:S', strtotime($check->checktime)) <= '09:00:00')
							{{ date('G:ia', strtotime($check->checktime)) }}
						@endif
					</td>
					<td>
						@if (date('H:I:S', strtotime($check->checktime)) >= '13:00:00')
							{{ date('G:ia', strtotime($check->checktime)) }}
						@endif
					</td>
				</tr>
			@endforeach
	</table> -->

	<table border="1">
		<tr>
			<th colspan="3"> {{ $name }} </th>
		</tr>
		<tr>
			<th> Fecha </th>
			<th> Entrada </th>
			<th> Salida </th>
		</tr>
			@foreach ($n as $check)
				<tr>
					<td>{{ $dias[date('w', strtotime($check))] }} 
						{{ date('d', strtotime($check)) }} de 
						{{ $meses[date('n', strtotime($check))-1] }} de 
						{{ date('Y', strtotime($check)) }}
					</td>
					<td>
						@if (date('H:I:S', strtotime($check)) <= '09:00:00')
							{{ date('G:ia', strtotime($check)) }}
						@endif
					</td>
					<td>
						@if (date('H:I:S', strtotime($check)) >= '13:00:00')
							{{ date('G:ia', strtotime($check)) }}
						@endif
					</td>
				</tr>
			@endforeach
	</table>
@stop