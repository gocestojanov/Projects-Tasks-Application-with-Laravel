<?php

namespace App\Http\Controllers;

use App\Mail\ProjectCreated;
use Illuminate\Http\Request;
use App\Project;
use App\ProjectStatus;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Project $project)
    {

        $projects = auth()->user()->projects;

        // cache()->rememberForever('stats', function () {
        //     return ['lessons'=>1399, 'hours'=>500000, 'series'=>100];
        // }); */
        //  $stats = cache()->get('stats');
        // dump($stats);

        return view('projects.index', compact('projects'));
    }


    public function show(Project $project)
    {

        // if ($project->owner_id !== auth()->id()) {
        //     abort(403);
        // }

       // abort_if($project->owner_id !== auth()->id(),403);

       // $this->authorize('view',$project);

       //auth()->user()->can('update',$project);

       // dd($project->statusname());


        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $projectstatus = ProjectStatus::all();

        return view('projects.edit',compact(['project','projectstatus']));
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function update(Project $project)
    {

        $validated = request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'image' => 'required|min:3',
            'status' => 'integer',
        ]);

        $name = request()->file('image')->getClientOriginalName();
        $path = request()->file('image')->storeAs('images', $name);


        $validated['owner_id'] = auth()->id();
        $validated['image'] = $path;


        $project->update($validated);

        return redirect('/projects/' . $project->id);
    }

    public function create()
    {
        $projectstatus = ProjectStatus::all();

        return view('projects.create', compact('projectstatus'));
    }

    public function store(Request $request)
    {

        $validated = request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'image' => 'required|min:3',
            'status' => 'integer',

        ]);

        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $name);

        $validated['owner_id'] = auth()->id();
        $validated['image'] = $path;

        $project = Project::create($validated);

        // dd($project);
        //event(new ProjectCreated($project));

        //Mail::to($request->user())->send(new ProjectCreated($project));
        //Mail::to($project->owner->email)->send(new ProjectCreated($project));

        session()->flash('message','Your project has been created!');

        return redirect('/projects');
    }
}
