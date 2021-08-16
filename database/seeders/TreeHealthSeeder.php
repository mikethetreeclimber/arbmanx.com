<?php

namespace Database\Seeders;

use App\Models\Tree\TreeHealth;
use Illuminate\Database\Seeder;

class TreeHealthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $treeHealth = [
            [
                'id'    => 1,
                'section'  => 'foliage color',
                'value'  => 'normal'
            ],
            [
                'id'    => 2,
                'section'  => 'foliage color',
                'value'  => 'chlorotic'
            ],
            [
                'id'    => 3,
                'section'  => 'foliage color',
                'value'  => 'necrotic'
            ],
            [
                'id'    => 4,
                'section'  => 'foliage density',
                'value'  => 'normal'
            ],
            [
                'id'    => 5,
                'section'  => 'foliage density',
                'value'  => 'sparse'
            ],
            [
                'id'    => 6,
                'section'  => 'leaf size',
                'value'  => 'normal'
            ],
            [
                'id'    => 7,
                'section'  => 'leaf size',
                'value'  => 'small'
            ],
            [
                'id'    => 8,
                'section'  => 'annual shoot growth',
                'value'  => 'excellent'
            ],
            [
                'id'    => 9,
                'section'  => 'annual shoot growth',
                'value'  => 'average'
            ],
            [
                'id'    => 10,
                'section'  => 'annual shoot growth',
                'value'  => 'poor'
            ],
            [
                'id'    => 11,
                'section'  => 'woundwood development',
                'value'  => 'excellent'
            ],
            [
                'id'    => 12,
                'section'  => 'woundwood development',
                'value'  => 'average'
            ],
            [
                'id'    => 13,
                'section'  => 'woundwood development',
                'value'  => 'poor'
            ],
            [
                'id'    => 14,
                'section'  => 'woundwood development',
                'value'  => 'none'
            ],
            [
                'id'    => 15,
                'section'  => 'vigor class',
                'value'  => 'excellent'
            ],
            [
                'id'    => 16,
                'section'  => 'vigor class',
                'value'  => 'average'
            ],
            [
                'id'    => 17,
                'section'  => 'vigor class',
                'value'  => 'fair'
            ],
            [
                'id'    => 18,
                'section'  => 'vigor class',
                'value'  => 'poor'
            ],
            [
                'id'    => 19,
                'section'  => 'growth obstruction',
                'value'  => 'stakes'
            ],
            [
                'id'    => 20,
                'section'  => 'growth obstruction',
                'value'  => 'wires/ties'
            ],
            [
                'id'    => 21,
                'section'  => 'growth obstruction',
                'value'  => 'signs'
            ],
            [
                'id'    => 22,
                'section'  => 'growth obstruction',
                'value'  => 'cables'
            ],
            [
                'id'    => 23,
                'section'  => 'growth obstruction',
                'value'  => 'curb/pavement'
            ],
            [
                'id'    => 24,
                'section'  => 'growth obstruction',
                'value'  => 'guards'
            ],
            [
                'id'    => 25,
                'section'  => 'growth obstruction',
                'value'  => 'other'
            ],
            [
                'id'    => 26,
                'section'  => 'epicormics',
                'value'  => 'true'
            ],
            [
                'id'    => 27,
                'section'  => 'twig dieback',
                'value'  => 'true'
            ],
            [
                'id'    => 28,
                'section'  => 'live crown ratio',
                'value'  => '0-10%'
            ],
            [
                'id'    => 29,
                'section'  => 'live crown ratio',
                'value'  => '10-20%'
            ],
            [
                'id'    => 30,
                'section'  => 'live crown ratio',
                'value'  => '20-30%'
            ],
            [
                'id'    => 31,
                'section'  => 'live crown ratio',
                'value'  => '30-40%'
            ],
            [
                'id'    => 32,
                'section'  => 'live crown ratio',
                'value'  => '40-50%'
            ],
            [
                'id'    => 33,
                'section'  => 'live crown ratio',
                'value'  => '50-60%'
            ],
            [
                'id'    => 34,
                'section'  => 'live crown ratio',
                'value'  => '60-70%'
            ],
            [
                'id'    => 35,
                'section'  => 'live crown ratio',
                'value'  => '70-80%'
            ],
            [
                'id'    => 36,
                'section'  => 'live crown ratio',
                'value'  => '80-90%'
            ],
            [
                'id'    => 37,
                'section'  => 'live crown ratio',
                'value'  => '90-99%'
            ],
        ];
        TreeHealth::insert($treeHealth);
    }
}