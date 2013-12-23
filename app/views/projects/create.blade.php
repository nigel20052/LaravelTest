@extends('layouts.base')

@section('titulo')
	Información del Proyecto
@stop

@section('contenido')

<h1>Create a Project</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'projects')) }}

  <div class="form-group ">
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
  <br>
  <strong>Actividades</strong>
  <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Num</th>
      <th>Description</th>
      <th>Revisar Herramienta</th>
      <th>Actividad</th>

    </tr>
  </thead>
  <tbody>
    
    <tr>
      {{ Form::open(array('url' => 'activities/actividad','class' =>'navbar-form navbar-left','role'=>'form')); }}
      <td align="center">
        <div class="form-group">
        {{ Form::submit('Add Activitie', array('class' => 'btn btn-primary')) }}
        </div>
      </td>
      <td>
        <div class="form-group">
        {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
        </div>
      </td>
      <td align="center">
        <div class="form-group">
        {{ Form::label('trace_tool', 'Activitie') }}
        {{ Form::checkbox('trace_tool', Input::old('trace_tool'), array('class' => 'form-control')) }}
        </div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td>{{Session::get('numero')}}</td>
      <td>{{Session::get('description')}}</td>
      <td>{{Session::get('trace_tool')}}</td>
      <td></td>
    </tr>
  </tbody>
</table>



<script>
  $(function() {
    $( "#planned_start" ).datepicker();
    $( "#planned_end" ).datepicker();
  });
</script>
@stop


<!--
-->