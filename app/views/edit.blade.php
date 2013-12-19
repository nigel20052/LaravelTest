@extends('layouts.base')

@section('titulo')
	Información del Proyecto
@stop

@section('contenido')

<h1>Editar {{ $projects->project_code }}</h1>

<!-- Aqui se muestran los errores si es que los hay xD-->
{{ HTML::ul($errors->all()) }}

{{ Form::model($projects, array('route' => array('projects.update', $projects->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('project_code', 'Project Code') }}
		{{ Form::text('project_code', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::textArea('description', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('hold_id', 'Hold Id') }}
		{{ Form::text('hold_id', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('planned_start', 'Planned start') }}
		{{ Form::text('planned_start', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('planned_end', 'Planned End') }}
		{{ Form::text('planned_end', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Editar el Proyecto!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop