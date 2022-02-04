<?php

namespace App\Http\Controllers;

use App\Mail\ProjectCreated;
use Illuminate\Http\Request;
use App\Project;
use App\ProjectStatus;
use App\Tag;
use Facade\FlareClient\Http\Response;
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

        // $projecttags = $project->tags->pluck('name');
        $projecttags = $project->tags;

        $projecttags->all();

        // dd($project);

        // $projecttags->toArray();

        // foreach ($projecttags as  $projecttag) {
        //     $ptags[]['text'] = $projecttag->name;
        // }

        // $ptags = json_encode($ptags, JSON_HEX_APOS);
        // dd($projecttags);

        return view('projects.edit',compact(['project','projectstatus','projecttags']));
    }

    public function getTags()
    {
        $tags = Tag::all();

        // The array we're going to return
        // $data = [];
        // $maptags = $tags->map(function($items){
        //     $data['text'] = $items->name;
        //     return $data;
        //  });


        // dd($maptags->toJson());
        return $tags;

        // return response()->json(array( 'tags' => $tags ), 200);
    }

    public function getProjectTags(Project $project)
    {
        $projecttags = $project->tags;

        $projecttags->all();


        // dd($project);

        return compact('projecttags');
    }



    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function update(Project $project)
    {

        // dd(request('projecttag'));
        // insert into Tags table new Tags

        $project->tags()->delete();


        $projecttags = explode(',', request('projecttag'));


        foreach ($projecttags as $projecttag) {


            $tag = Tag::firstOrNew(['name' => $projecttag]);

            if ( $tag instanceof Tag ) {
                $tag->name = $projecttag;
                $project->tags()->save($tag);
            }


        }




        // insert into Taggables table Project tags


        $validated = request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'image' => 'required|min:3',
            'status' => 'integer',
        ]);


        if ( request()->file('image') != null) {

            $name = request()->file('image')->getClientOriginalName();

            $path = request()->file('image')->storeAs('images', $name);

            $validated['image'] = $name;

        };



        $validated['owner_id'] = auth()->id();



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
        $validated['image'] = $name;

        $project = Project::create($validated);


        $projecttags = explode(',', request('projecttag'));


        foreach ($projecttags as $projecttag) {


            $tag = Tag::firstOrNew(['name' => $projecttag]);

            if ( $tag instanceof Tag ) {
                $tag->name = $projecttag;
                $project->tags()->save($tag);
            }


        }

        // dd($project->owner->email);
        //event(new ProjectCreated($project));

        // Mail::to($request->user())->send(new ProjectCreated($project));
        Mail::to($project->owner->email)->send(new ProjectCreated($project));

        session()->flash('message','Your project has been created!');

        return redirect('/projects');
    }
}
