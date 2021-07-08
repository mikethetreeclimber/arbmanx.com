<?php

namespace Database\Seeders;

use App\Models\Trees\TreeTarget;
use Illuminate\Database\Seeder;

class TreeTargetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $treeTargets = [
            [
                'id' => 1,
                'type' => 'use under tree',
                'name' => 'building'
            ],
            [
                'id' => 2,
                'type' => 'use under tree',
                'name' => 'parking'
            ],
            [
                'id' => 3,
                'type' => 'use under tree',
                'name' => 'traffic'
            ],
            [
                'id' => 4,
                'type' => 'use under tree',
                'name' => 'pedestrian'
            ],
            [
                'id' => 5,
                'type' => 'use under tree',
                'name' => 'recreation'
            ],
            [
                'id' => 6,
                'type' => 'use under tree',
                'name' => 'landscape'
            ],
            [
                'id' => 7,
                'type' => 'use under tree',
                'name' => 'hardscape'
            ],
            [
                'id' => 8,
                'type' => 'use under tree',
                'name' => 'small features'
            ],
            [
                'id' => 9,
                'type' => 'use under tree',
                'name' => 'utility lines'
            ],
            [
                'id' => 10,
                'type' => 'can target be moved?',
                'name' => 'true'
            ],
            [
                'id' => 11,
                'type' => 'can target be restricted?',
                'name' => 'true'
            ],
            [
                'id' => 12,
                'type' => 'occupancy rate',
                'name' => 'rare use'
            ],
            [
                'id' => 13,
                'type' => 'occupancy rate',
                'name' => 'occasional use'
            ],
            [
                'id' => 14,
                'type' => 'occupancy rate',
                'name' => 'frequent use'
            ],
            [
                'id' => 15,
                'type' => 'occupancy rate',
                'name' => 'constant use'
            ],
            [
                'id' => 16,
                'type' => 'target within dripline?',
                'name' => 'true'
            ],
            [
                'id' => 17,
                'type' => 'target within 1x the height of the tree?',
                'name' => 'true'
            ],
            [
                'id' => 18,
                'type' => 'target within 1.5x the height of the tree?',
                'name' => 'true'
            ],
        ];
        TreeTarget::insert($treeTargets);
    }
}