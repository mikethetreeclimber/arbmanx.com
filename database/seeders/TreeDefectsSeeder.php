<?php

namespace Database\Seeders;

use App\Models\Tree\TreeDefect;
use Illuminate\Database\Seeder;

class TreeDefectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $treeDefects = [
            [
               'id' => 1,
               'section' => 'suspect root rot',
               'value' => 'true'
            ],
            [
                'id' => 2,
                'section' => 'mushroom/conk present',
                'value' => 'true'
             ],
             [
                'id' => 3,
                'section' => 'exposed roots',
                'value' => 'severe'
             ],
             [
                'id' => 4,
                'section' => 'exposed roots',
                'value' => 'moderate'
             ],
             [
                'id' => 5,
                'section' => 'exposed roots',
                'value' => 'low'
             ],
             [
                'id' => 6,
                'section' => 'undermined',
                'value' => 'severe'
             ],
             [
                'id' => 7,
                'section' => 'undermined',
                'value' => 'moderate'
             ],
             [
                'id' => 8,
                'section' => 'undermined',
                'value' => 'low'
             ],
             [
                 'id' => 9,
                 'section' => 'root pruned',
                 'value' => 'within 5 feet of trunk'
             ],
             [
                 'id' => 10,
                 'section' => 'root pruned',
                 'value' => 'within 10 feet of trunk'
             ],
             [
                 'id' => 11,
                 'section' => 'root pruned',
                 'value' => 'within 15 feet of trunk'
             ],
             [
                 'id' => 12,
                 'section' => 'root pruned',
                 'value' => 'greater than 15 feet from trunk'
             ],
             [
                'id' => 13,
                'section'  => 'root area affected',
                'value'  => '0-10%'
            ],
            [
                'id' => 14,
                'section'  => 'root area affected',
                'value'  => '10-20%'
            ],
            [
                'id' => 15,
                'section'  => 'root area affected',
                'value'  => '20-30%'
            ],
            [
                'id' => 16,
                'section'  => 'root area affected',
                'value'  => '30-40%'
            ],
            [
                'id' => 17,
                'section'  => 'root area affected',
                'value'  => '40-50%'
            ],
            [
                'id' => 18,
                'section' => 'buttress wounded',
                'value' => 'true'
            ],
            [
                'id' => 19,
                'section' => 'restricted root area',
                'value' => 'severe'
            ],
            [
                'id' => 20,
                'section' => 'restricted root area',
                'value' => 'moderate'
            ],
            [
                'id' => 21,
                'section' => 'restricted root area',
                'value' => 'low'
            ],
            [
                'id' => 22,
                'section' => 'potential for root failure',
                'value' => 'severe'
            ],
            [
                'id' => 23,
                'section' => 'potential for root failure',
                'value' => 'moderate'
            ],
            [
                'id' => 24,
                'section' => 'potential for root failure',
                'value' => 'low'
            ],
            [
                'id' => 25,
                'section' => 'lean', 
                'value' => 'natural'
            ],
            [
                'id' => 26,
                'section' => 'lean',
                'value' => 'unnatural'
            ],
            [
                'id' => 27,
                'section' => 'lean',
                'value' => 'self-correctinf'
            ],
            [
                'id' => 28,
                'section' => 'soil heaving',
                'value' => 'true'
            ],
            [
                'id' => 29,
                'section' => 'decay in plane of tree',
                'value' => 'true'
            ],
            [
                'id' => 30,
                'section' => 'roots broken',
                'value' => 'true'
            ],
            [
                'id' => 31,
                'section' => 'soil cracking',
                'value' => 'true'
            ],
            [
                'id' => 32,
                'section' => 'lean severity',
                'value' => 'severe'
            ],
            [
                'id' => 33,
                'section' => 'lean severity',
                'value' => 'moderate'
            ],
            [
                'id' => 34,
                'section' => 'lean severity',
                'value' => 'low'
            ],
        ];
        TreeDefect::insert($treeDefects);
    }
}