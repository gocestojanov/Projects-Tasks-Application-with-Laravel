<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {
        // dd(request()->all());

        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();

    }


    public function store(Project $project)
    {
        /* Task::create([
            'project_id' => $project->id,
            'description' => request('description')
        ]); */

        $project->addTask(request('description'));


        return back();
    }
}
