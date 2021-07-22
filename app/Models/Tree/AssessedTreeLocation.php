<?php

namespace App\Models\Tree;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessedTreeLocation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tree()
    {
        return $this->belongsTo(AssessedTree::class);
    }
}
