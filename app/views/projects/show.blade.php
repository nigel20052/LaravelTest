@extends('layouts.base')

@section('titulo')
	Información del Proyecto
@stop

@section('contenido')

<h1>Ver {{ $projects->id }}</h1>

	<div class="jumbotron text-center">
		<h2>Project Code:{{ $projects->project_code }}</h2>
		<p>
			<strong>Description :</strong> {{ $projects->description }}<br>
			<strong>Hold ID:</strong> {{ $projects->hold_id }}<br>
			<strong>Planned Start:</strong> {{ $projects->planned_start }}<br>
			<strong>Planned End:</strong> {{ $projects->planned_end }}<br>
		</p>
	</div>
@stop