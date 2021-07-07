<?php

namespace App\Models\Trees;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TreeCharacteristic extends Model
{

    public function __contruct($characteristic)
    {
        $this->characteristic = $characteristic;
    }

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