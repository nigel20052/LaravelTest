<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();
		return View::make('projects.index')
			->with('projects', $projects);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'project_code'       => 'required|numeric',
			'description'      => 'required',
			'hold_id' => 'required|numeric',
			'planned_start' => 'required|date',
			'planned_end' => 'required|date'
		);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('projects/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {

			$projects = new Project;
			$projects->project_code      = Input::get('project_code');
			$projects->description     = Input::get('description');
			$projects->hold_id = Input::get('hold_id');
			$projects->planned_start = Input::get('planned_start');
			$projects->planned_end = Input::get('planned_end');
			$projects->save();

			Session::flash('message', 'Successfully created project');
			return Redirect::to('projects');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$projects = Project::find($id);

		return View::make('projects.show')
			->with('projects', $projects);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$projects = Project::find($id);

		return View::make('projects.edit')
			->with('projects', $projects);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'project_code'       => 'required|numeric',
			'description'      => 'required',
			'hold_id' => 'required|numeric',
			'planned_start' => 'required|date',
			'planned_end' => 'required|date'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('projects/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			
			$projects= Project::find($id);
			$projects->project_code      = Input::get('project_code');
			$projects->description     = Input::get('description');
			$projects->hold_id = Input::get('hold_id');
			$projects->planned_start = Input::get('planned_start');
			$projects->planned_end = Input::get('planned_end');
			$projects->save();

			Session::flash('message', 'Successfully updated the Project!');
			return Redirect::to('projects');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$projects = Project::find($id);
		$projects->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the project!');
		return Redirect::to('projects');
	}
	public function search()
	{
		$busqueda="";
		if (Input::get('project_code')){
    		$busqueda = $busqueda . "project_code like '%".Input::get('project_code')."%' AND ";
		}
		if (Input::get('description')){
    		$busqueda = $busqueda . "description like '%".Input::get('description')."%' AND ";
		}
		if (Input::get('hold_id')){
    		$busqueda = $busqueda . "hold_id like '%".Input::get('hold_id')."%' AND ";
		}
		$busqueda = substr($busqueda, 0, -4);
		if ($busqueda) {
			$projects = Project::whereRaw("".$busqueda."")->get();
			return View::make('projects.index')
			->with('projects', $projects);
		}
		else{

			$projects = Project::all();
			return View::make('projects.index')
			->with('projects', $projects);
		}
	}

}