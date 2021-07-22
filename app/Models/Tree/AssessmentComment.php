<?php

namespace App\Models\Tree;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentComment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function commentable()
    {
        return $this->morphTo('commentable',);
    }

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }
}
