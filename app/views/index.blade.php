@extends('layouts.base')

@section('contenido')
<!--
	{{Form::open(array('action' => 'ProjectsController@index'))}}
		{{ Form::label('numero', 'Número') }}
		{{ Form::text('numero')}}
		{{ Form::label('vin', 'VIN') }}
		{{ Form::text('vin')}}
		{{ Form::label('Descripcion', 'Descripcion') }}
		{{ Form::text('numero')}}
		{{ Form::submit('Buscar');}}
	{{Form::close()}} -->

<h1>All the Projects</h1>

@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Numero</td>
			<td>descripción</td>
			<td>Hold</td>
			<td>Planned Start</td>
			<td>Planned End</td>
			<td>actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($projects as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->project_code }}</td>
			<td>{{ $value->description }}</td>
			<td>{{ $value->hold_id }}</td>
			<td>{{ $value->planned_start }}</td>
			<td>{{ $value->planned_end }}</td>

			
			<td>

				{{ Form::open(array('url' => 'projects/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Project', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
				<a class="btn btn-small btn-success" href="{{ URL::to('projects/' . $value->id) }}">Show this Project</a>
				<a class="btn btn-small btn-info" href="{{ URL::to('projects/' . $value->id . '/edit') }}">Edit this Project</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop