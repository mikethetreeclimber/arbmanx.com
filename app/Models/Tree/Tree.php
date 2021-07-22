<?php

namespace App\Models\Tree;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('common_name', 'like', '%'.$search.'%')
                ->orWhere('genus_name', 'like', '%'.$search.'%');
    }
}
