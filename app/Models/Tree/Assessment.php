<?php

namespace App\Models\Tree;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assessment extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $casts = [
        'completed_at' => 'datetime',
        'started_at' => 'datetime',
        'uncomplete_sections' => 'array'
    ];

    public function assessor()
    {
        return $this->belongsTo(User::class, 'assessor_id');
    }

    public function tree()
    {
        return $this->belongsTo(AssessedTree::class, 'assessed_tree_id');
    }

    public function characteristics()
    {
        return $this->belongsToMany(TreeCharacteristic::class);
    }

    public function health()
    {
        return $this->belongsToMany(TreeHealth::class);
    }

    public function site_conditions()
    {
        return $this->belongsToMany(TreeSiteCondition::class);
    }

    public function targets()
    {
        return $this->belongsToMany(TreeTarget::class);
    }

    public function defects()
    {
        return $this->belongsToMany(TreeDefect::class);
    }

    public function comments()
    {
        return $this->morphMany(AssessmentComment::class, 'commentable');
    }
}