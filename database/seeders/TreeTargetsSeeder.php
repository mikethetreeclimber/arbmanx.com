<?php

namespace Database\Seeders;

use App\Models\Tree\TreeTarget;
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
                'section' => 'use under tree',
                'value' => 'building'
            ],
            [
                'id' => 2,
                'section' => 'use under tree',
                'value' => 'parking'
            ],
            [
                'id' => 3,
                'section' => 'use under tree',
                'value' => 'traffic'
            ],
            [
                'id' => 4,
                'section' => 'use under tree',
                'value' => 'pedestrian'
            ],
            [
                'id' => 5,
                'section' => 'use under tree',
                'value' => 'recreation'
            ],
            [
                'id' => 6,
                'section' => 'use under tree',
                'value' => 'landscape'
            ],
            [
                'id' => 7,
                'section' => 'use under tree',
                'value' => 'hardscape'
            ],
            [
                'id' => 8,
                'section' => 'use under tree',
                'value' => 'small features'
            ],
            [
                'id' => 9,
                'section' => 'use under tree',
                'value' => 'utility lines'
            ],
            [
                'id' => 10,
                'section' => 'can target be moved?',
                'value' => 'true'
            ],
            [
                'id' => 11,
                'section' => 'can target be restricted?',
                'value' => 'true'
            ],
            [
                'id' => 12,
                'section' => 'occupancy rate',
                'value' => 'rare use'
            ],
            [
                'id' => 13,
                'section' => 'occupancy rate',
                'value' => 'occasional use'
            ],
            [
                'id' => 14,
                'section' => 'occupancy rate',
                'value' => 'frequent use'
            ],
            [
                'id' => 15,
                'section' => 'occupancy rate',
                'value' => 'constant use'
            ],
            [
                'id' => 16,
                'section' => 'target within',
                'value' => 'dripline'
            ],
            [
                'id' => 17,
                'section' => 'target within',
                'value' => ' 1x the height of the tree'
            ],
            [
                'id' => 18,
                'section' => 'target within',
                'value' => ' 1.5x the height of the tree'
            ],
        ];
        TreeTarget::insert($treeTargets);
    }
}