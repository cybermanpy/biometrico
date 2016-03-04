@extends('layouts.default')

@section('content')

	<table border="1">

		@foreach ($collection as $key => $items)
		<tr>
			<td> {{ $key }} </td>
			@foreach($items as $horario)
			<td> {{ $dias[date('w', strtotime($horario))] }} {{ date('d', strtotime($horario)) }} {{ date('G:ia', strtotime($horario)) }} </td>
			@endforeach
		</tr>		
		@endforeach
			
	</table>

@stop