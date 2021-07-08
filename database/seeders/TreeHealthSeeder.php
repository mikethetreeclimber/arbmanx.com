<?php

namespace Database\Seeders;

use App\Models\Trees\TreeHealth;
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
                'type'  => 'foliage color',
                'name'  => 'normal'
            ],
            [
                'id'    => 2,
                'type'  => 'foliage color',
                'name'  => 'chlorotic'
            ],
            [
                'id'    => 3,
                'type'  => 'foliage color',
                'name'  => 'necrotic'
            ],
            [
                'id'    => 4,
                'type'  => 'foliage density',
                'name'  => 'normal'
            ],
            [
                'id'    => 5,
                'type'  => 'foliage density',
                'name'  => 'sparse'
            ],
            [
                'id'    => 6,
                'type'  => 'leaf size',
                'name'  => 'normal'
            ],
            [
                'id'    => 7,
                'type'  => 'leaf size',
                'name'  => 'small'
            ],
            [
                'id'    => 8,
                'type'  => 'annual shoot growth',
                'name'  => 'excellent'
            ],
            [
                'id'    => 9,
                'type'  => 'annual shoot growth',
                'name'  => 'average'
            ],
            [
                'id'    => 10,
                'type'  => 'annual shoot growth',
                'name'  => 'poor'
            ],
            [
                'id'    => 11,
                'type'  => 'woundwood development',
                'name'  => 'excellent'
            ],
            [
                'id'    => 12,
                'type'  => 'woundwood development',
                'name'  => 'average'
            ],
            [
                'id'    => 13,
                'type'  => 'woundwood development',
                'name'  => 'poor'
            ],
            [
                'id'    => 14,
                'type'  => 'woundwood development',
                'name'  => 'none'
            ],
            [
                'id'    => 15,
                'type'  => 'vigor class',
                'name'  => 'excellent'
            ],
            [
                'id'    => 16,
                'type'  => 'vigor class',
                'name'  => 'average'
            ],
            [
                'id'    => 17,
                'type'  => 'vigor class',
                'name'  => 'fair'
            ],
            [
                'id'    => 18,
                'type'  => 'vigor class',
                'name'  => 'poor'
            ],
            [
                'id'    => 19,
                'type'  => 'growth obstruction',
                'name'  => 'stakes'
            ],
            [
                'id'    => 20,
                'type'  => 'growth obstruction',
                'name'  => 'wires/ties'
            ],
            [
                'id'    => 21,
                'type'  => 'growth obstruction',
                'name'  => 'signs'
            ],
            [
                'id'    => 22,
                'type'  => 'growth obstruction',
                'name'  => 'cables'
            ],
            [
                'id'    => 23,
                'type'  => 'growth obstruction',
                'name'  => 'curb/pavement'
            ],
            [
                'id'    => 24,
                'type'  => 'growth obstruction',
                'name'  => 'guards'
            ],
            [
                'id'    => 25,
                'type'  => 'growth obstruction',
                'name'  => 'other'
            ],
            [
                'id'    => 26,
                'type'  => 'epicormics',
                'name'  => 'true'
            ],
            [
                'id'    => 27,
                'type'  => 'twig dieback',
                'name'  => 'true'
            ],
            [
                'id'    => 28,
                'type'  => 'live crown ratio',
                'name'  => '0-10%'
            ],
            [
                'id'    => 29,
                'type'  => 'live crown ratio',
                'name'  => '10-20%'
            ],
            [
                'id'    => 30,
                'type'  => 'live crown ratio',
                'name'  => '20-30%'
            ],
            [
                'id'    => 31,
                'type'  => 'live crown ratio',
                'name'  => '30-40%'
            ],
            [
                'id'    => 32,
                'type'  => 'live crown ratio',
                'name'  => '40%-50%'
            ],
            [
                'id'    => 33,
                'type'  => 'live crown ratio',
                'name'  => '50-60%'
            ],
            [
                'id'    => 34,
                'type'  => 'live crown ratio',
                'name'  => '60-70%'
            ],
            [
                'id'    => 35,
                'type'  => 'live crown ratio',
                'name'  => '70-80%'
            ],
            [
                'id'    => 36,
                'type'  => 'live crown ratio',
                'name'  => '80-90%'
            ],
            [
                'id'    => 37,
                'type'  => 'live crown ratio',
                'name'  => '90-99%'
            ],
            [
                'id'    => 38,
                'type'  => 'live crown ratio',
                'name'  => '100%'
            ],
        ];
        TreeHealth::insert($treeHealth);
    }
}