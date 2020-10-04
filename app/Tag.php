<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;


    public function projects()
    {
        return $this->morphedByMany('App\Project','tagabble');
    }

    public function tasks()
    {
        return $this->morphedByMany('App\Task','taggable');
    }
}
