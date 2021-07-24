<?php

namespace App\Models\Tree;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TreeCharacteristic extends Model
{
    use HasFactory;

    public function assessments()
    {
        return $this->belongsToMany(Assessment::class);
    }

    public function comments()
    {
        return $this->morphMany(AssessmentComment::class, 'commentable');
    }
}