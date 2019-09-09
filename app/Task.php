<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = ['description','completed'];


    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
