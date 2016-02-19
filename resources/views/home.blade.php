@extends('layouts.default')

@section('content')
	<ul>
	@foreach($checks as $check)
		<li> {{ $check->userid }} - {{ $check->checktime }}</li>
	@endforeach
	</ul>

@stop