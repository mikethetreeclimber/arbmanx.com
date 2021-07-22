<?php

namespace App\Models\Tree;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssessedTree extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    public function latestAssessment()
    {
        return $this->hasOne(Assessment::class)->latestOfMany();
    }

    public function location()
    {
        return $this->hasOne(AssessedTreeLocation::class);
    }

    public function species()
    {
        return $this->belongsTo(Tree::class, 'tree_id');
    }
}
