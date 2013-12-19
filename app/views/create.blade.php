@extends('layouts.base')

@section('titulo')
	Información del Proyecto
@stop

@section('contenido')

<h1>Create a Nerd</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'projects')) }}

  <div class="form-group">
    {{ Form::label('project_code', 'Project Code') }}
    {{ Form::text('project_code', Input::old('project_code'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textArea('description', Input::old('description'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('hold_id', 'Hold ID') }}
    {{ Form::text('hold_id', Input::old('hold_id'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('planned_start', 'Planned Start') }}
    {{ Form::text('planned_start', Input::old('planned_start'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('planned_end', 'Planned End') }}
    {{ Form::text('planned_end', Input::old('planned_end'), array('class' => 'form-control')) }}
  </div>

  {{ Form::submit('Create Project', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop