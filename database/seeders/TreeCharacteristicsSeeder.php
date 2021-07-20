<?php

namespace Database\Seeders;

use App\Models\Trees\TreeCharacteristic;
use Illuminate\Database\Seeder;

class TreeCharacteristicsSeeder extends Seeder
{
    public function run()
    {
        $treeCharacteristics = [
            [
                'id' => 1,
                'type' => 'form',
                'name' => 'generally symmetric'
            ],
            [
                'id' => 2,
                'type' => 'form',
                'name' => 'minor asymmetry'
            ],
            [
                'id' => 3,
                'type' => 'form',
                'name' => 'major asymmetry'
            ],
            [
                'id' => 4,
                'type' => 'form',
                'name' => 'stump sprout'
            ],
            [
                'id' => 5,
                'type' => 'form',
                'name' => 'stag headed'
            ],
            [
                'id' => 6,
                'type' => 'crown class',
                'name' => 'dominant'
            ],
            [
                'id' => 7,
                'type' => 'crown class',
                'name' => 'co-dominant'
            ],
            [
                'id' => 8,
                'type' => 'crown class',
                'name' => 'intermediate'
            ],
            [
                'id' => 9,
                'type' => 'crown class',
                'name' => 'suppressed'
            ],
            [
                'id' => 10,
                'type' => 'age class',
                'name' => 'young'
            ],
            [
                'id' => 11,
                'type' => 'age class',
                'name' => 'semi-mature'
            ],
            [
                'id' => 12,
                'type' => 'age class',
                'name' => 'mature'
            ],
            [
                'id' => 13,
                'type' => 'age class',
                'name' => 'over-mature/senescent'
            ],
            [
                'id' => 14,
                'type' => 'special value',
                'name' => 'specimen'
            ],
            [
                'id' => 15,
                'type' => 'special value',
                'name' => 'historic'
            ],
            [
                'id' => 16,
                'type' => 'special value',
                'name' => 'wildlife'
            ],
            [
                'id' => 17,
                'type' => 'special value',
                'name' => 'unusual'
            ],
            [
                'id' => 18,
                'type' => 'special value',
                'name' => 'street tree'
            ],
            [
                'id' => 19,
                'type' => 'special value',
                'name' => 'screen'
            ],
            [
                'id' => 20,
                'type' => 'special value',
                'name' => 'shade'
            ],
            [
                'id' => 21,
                'type' => 'special value',
                'name' => 'indigenous'
            ],
            [
                'id' => 22,
                'type' => 'special value',
                'name' => 'protected by gov. agency'
            ]
        ];
        TreeCharacteristic::insert($treeCharacteristics);
    }
}