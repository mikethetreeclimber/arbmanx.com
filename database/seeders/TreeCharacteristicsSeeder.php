<?php

namespace Database\Seeders;

use App\Models\Tree\TreeCharacteristic;
use Illuminate\Database\Seeder;

class TreeCharacteristicsSeeder extends Seeder
{
    public function run()
    {
        $treeCharacteristics = [
            [
                'id' => 1,
                'section' => 'form',
                'value' => 'generally symmetric'
            ],
            [
                'id' => 2,
                'section' => 'form',
                'value' => 'minor asymmetry'
            ],
            [
                'id' => 3,
                'section' => 'form',
                'value' => 'major asymmetry'
            ],
            [
                'id' => 4,
                'section' => 'form',
                'value' => 'stump sprout'
            ],
            [
                'id' => 5,
                'section' => 'form',
                'value' => 'stag headed'
            ],
            [
                'id' => 6,
                'section' => 'crown class',
                'value' => 'dominant'
            ],
            [
                'id' => 7,
                'section' => 'crown class',
                'value' => 'co-dominant'
            ],
            [
                'id' => 8,
                'section' => 'crown class',
                'value' => 'intermediate'
            ],
            [
                'id' => 9,
                'section' => 'crown class',
                'value' => 'suppressed'
            ],
            [
                'id' => 10,
                'section' => 'age class',
                'value' => 'young'
            ],
            [
                'id' => 11,
                'section' => 'age class',
                'value' => 'semi-mature'
            ],
            [
                'id' => 12,
                'section' => 'age class',
                'value' => 'mature'
            ],
            [
                'id' => 13,
                'section' => 'age class',
                'value' => 'over-mature/senescent'
            ],
            [
                'id' => 14,
                'section' => 'special value',
                'value' => 'specimen'
            ],
            [
                'id' => 15,
                'section' => 'special value',
                'value' => 'historic'
            ],
            [
                'id' => 16,
                'section' => 'special value',
                'value' => 'wildlife'
            ],
            [
                'id' => 17,
                'section' => 'special value',
                'value' => 'unusual'
            ],
            [
                'id' => 18,
                'section' => 'special value',
                'value' => 'street tree'
            ],
            [
                'id' => 19,
                'section' => 'special value',
                'value' => 'screen'
            ],
            [
                'id' => 20,
                'section' => 'special value',
                'value' => 'shade'
            ],
            [
                'id' => 21,
                'section' => 'special value',
                'value' => 'indigenous'
            ],
            [
                'id' => 22,
                'section' => 'special value',
                'value' => 'protected by gov. agency'
            ]
        ];
        TreeCharacteristic::insert($treeCharacteristics);
    }
}