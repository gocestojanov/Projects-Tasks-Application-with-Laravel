<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title','description','owner_id'];

    public function Tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($description)
    {
        $attributes = request()->validate(['description' => 'required']);

        $this->Tasks()->create($attributes);

        /* return Task::create([
            'project_id' => $this->id,
            'description' => $description
        ]); */
    }

}
