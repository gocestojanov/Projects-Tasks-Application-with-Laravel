<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectStatus extends Model
{

    use HasFactory;

    // public function project()
    // {
    //     return $this->belongsTo(Project::class, 'status');
    // }

}
