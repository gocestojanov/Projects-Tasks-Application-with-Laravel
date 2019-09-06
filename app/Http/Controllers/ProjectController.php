<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function index(Project $project)
    {

        $projects = $project->all();

        // return $projects;

        // return view('projects.index', ['projects' => $projects] );
        return view('projects.index', compact('projects'));
    }


    public function show(Project $project)
    {
        //$project = Project::findOrFail($id);

        //return $project;

        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {


        //$project = Project::find($id);
        //$project = Project::findOrFail($id);


        return view('projects.edit',compact('project'));
    }

    public function destroy(Project $project)
    {
        //dd('Hello Destroy' . $id);

        //Project::find($id)->delete();

        $project->delete();

        return redirect('/projects');
    }

    public function update(Project $project)
    {
        //dd(request()->all());

        //$project = Project::find($id);

        $project->update(request(['title','description']))

        //$project->title = request('title');
        //$project->description = request('description');

        //$project->save();

        return redirect('/projects');
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {


        Project::create(request(['title','description']));
/*
         $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();
 */


        //return request()->all();
        //return request('title');

        return redirect('/projects');
    }
}
