@extends('layouts.default')

@section('content')
	
	<ul>
		
		<li> {{ $checks->userid }} - {{ $checks->user->name }} </li>
		
	</ul>

@stop
