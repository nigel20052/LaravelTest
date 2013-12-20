@extends('layouts.base')

@section('contenido')

<h1>All the Projects</h1>

@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
{{ Form::open(array('url' => 'projects/search','class' =>'navbar-form navbar-left','role'=>'form')); }}

  <div class="form-group">
    {{ Form::label('project_code', 'Project Code') }}
    {{ Form::text('project_code', Input::old('project_code'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('hold_id', 'Hold ID') }}
    {{ Form::text('hold_id', Input::old('hold_id'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
  {{ Form::submit('Search', array('class' => 'btn btn-primary')) }}
	</div>

{{ Form::close() }}
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Numero</td>
			<td>descripción</td>
			<td>Hold ID</td>
			<td>Planned Start</td>
			<td>Planned End</td>
			<td>Activities</td>
			<td>Actions</td>
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
			<td>{{/*$activities = Activities::whereRaw('project_id ='.$value->id.' AND trace_tool =1')->count();*/
				$value->activities()->count() }}</td>

			
			<td>

				{{ Form::open(array('url' => 'projects/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Project', array('class' => 'btn btn-warning btn-sm')) }}
				{{ Form::close() }}
				<a class="btn btn-small btn-success btn-sm" href="{{ URL::to('projects/' . $value->id) }}">Show this Project</a>
				<a class="btn btn-small btn-info btn-sm" href="{{ URL::to('projects/' . $value->id . '/edit') }}">Edit this Project</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop