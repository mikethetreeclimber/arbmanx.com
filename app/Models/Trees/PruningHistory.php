<?php

namespace App\Models\Trees;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruningHistory extends Model
{
    use HasFactory;

    protected $guarder = [];

    public function assessedTree()
    {
        return $this->belongsTo(AssessedTree::class);
    }
}