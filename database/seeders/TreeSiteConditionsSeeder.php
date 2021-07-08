<?php

namespace Database\Seeders;

use App\Models\Trees\TreeSiteCondition;
use Illuminate\Database\Seeder;

class TreeSiteConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $treeSiteConditions = [
            [
                'id' => 1,
                'type' => 'site character',
                'name' => 'residence'
            ],
            [
                'id' => 2,
                'type' => 'site character',
                'name' => 'commercial'
            ],
            [
                'id' => 3,
                'type' => 'site character',
                'name' => 'industrial'
            ],
            [
                'id' => 4,
                'type' => 'site character',
                'name' => 'park'
            ],
            [
                'id' => 5,
                'type' => 'site character',
                'name' => 'open space'
            ],
            [
                'id' => 6,
                'type' => 'site character',
                'name' => 'natural'
            ],
            [
                'id' => 7,
                'type' => 'site character',
                'name' => 'woodland\forest'
            ],
            [
                'id' => 8,
                'type' => 'landscape type',
                'name' => 'parkway'
            ],
            [
                'id' => 9,
                'type' => 'landscape type',
                'name' => 'raised bed'
            ],
            [
                'id' => 10,
                'type' => 'landscape type',
                'name' => 'container'
            ],
            [
                'id' => 11,
                'type' => 'landscape type',
                'name' => 'mound'
            ],
            [
                'id' => 12,
                'type' => 'landscape type',
                'name' => 'lawn'
            ],
            [
                'id' => 13,
                'type' => 'landscape type',
                'name' => 'shrub border'
            ],
            [
                'id' => 14,
                'type' => 'landscape type',
                'name' => 'wind break'
            ],
            [
                'id' => 15,
                'type' => 'irrigation',
                'name' => 'none'
            ],
            [
                'id' => 16,
                'type' => 'irrigation',
                'name' => 'adequate'
            ],
            [
                'id' => 17,
                'type' => 'irrigation',
                'name' => 'inadequate'
            ],
            [
                'id' => 18,
                'type' => 'irrigation',
                'name' => 'excessive'
            ],
            [
                'id' => 19,
                'type' => 'irrigation',
                'name' => 'trunk wettled'
            ],
            [
                'id' => 20,
                'type' => 'disturbance',
                'name' => 'construction'
            ],
            [
                'id' => 21,
                'type' => 'disturbance',
                'name' => 'soil disturbance'
            ],
            [
                'id' => 22,
                'type' => 'disturbance',
                'name' => 'grade change'
            ],
            [
                'id' => 23,
                'type' => 'disturbance',
                'name' => 'line clearing'
            ],
            [
                'id' => 24,
                'type' => 'disturbance',
                'name' => 'site clearing'
            ],
            //
            [
                'id' => 25,
                'type' => 'soil problems',
                'name' => 'drainage'
            ],
            [
                'id' => 26,
                'type' => 'soil problems',
                'name' => 'shallow'
            ],
            [
                'id' => 27,
                'type' => 'soil problems',
                'name' => 'compacted'
            ],
            [
                'id' => 28,
                'type' => 'soil problems',
                'name' => 'droughty'
            ],
            [
                'id' => 29,
                'type' => 'soil problems',
                'name' => 'saline'
            ],
            [
                'id' => 30,
                'type' => 'soil problems',
                'name' => 'alkaline'
            ],
            [
                'id' => 31,
                'type' => 'soil problems',
                'name' => 'acidic'
            ],
            [
                'id' => 32,
                'type' => 'soil problems',
                'name' => 'small volume'
            ],
            [
                'id' => 33,
                'type' => 'soil problems',
                'name' => 'disease center'
            ],
            [
                'id' => 34,
                'type' => 'soil problems',
                'name' => 'history of fail'
            ],
            [
                'id' => 35,
                'type' => 'soil problems',
                'name' => 'clay'
            ],
            [
                'id' => 36,
                'type' => 'soil problems',
                'name' => 'expansive'
            ],
            //
            [
                'id' => 37,
                'type' => 'obstructions',
                'name' => 'lights'
            ],
            [
                'id' => 38,
                'type' => 'obstructions',
                'name' => 'signage'
            ],
            [
                'id' => 39,
                'type' => 'obstructions',
                'name' => 'line-of-sight'
            ],
            [
                'id' => 40,
                'type' => 'obstructions',
                'name' => 'view'
            ],
            [
                'id' => 41,
                'type' => 'obstructions',
                'name' => 'overhead lines'
            ],
            [
                'id' => 42,
                'type' => 'obstructions',
                'name' => 'underground utilities'
            ],
            [
                'id' => 43,
                'type' => 'obstructions',
                'name' => 'traffic'
            ],
            [
                'id' => 44,
                'type' => 'obstructions',
                'name' => 'adjacent veg.'
            ],
            [
                'id' => 45,
                'type' => 'obstructions',
                'name' => 'other'
            ],
            [
                'id' => 46,
                'type' => 'pavement lifted',
                'name' => 'true'
            ],
            [
                'id' => 47,
                'type' => 'dripline paved',
                'name' => '10-25%'
            ],
            [
                'id' => 48,
                'type' => 'dripline paved',
                'name' => '25-50%'
            ],
            [
                'id' => 49,
                'type' => 'dripline paved',
                'name' => '50-75%'
            ],
            [
                'id' => 50,
                'type' => 'dripline paved',
                'name' => '75-100%'
            ],
            [
                'id' => 51,
                'type' => 'dripline w/fill soil',
                'name' => '10-25%'
            ],
            [
                'id' => 52,
                'type' => 'dripline w/fill soil',
                'name' => '25-50%'
            ],
            [
                'id' => 53,
                'type' => 'dripline w/fill soil',
                'name' => '50-75%'
            ],
            [
                'id' => 54,
                'type' => 'dripline w/fill soil',
                'name' => '75-100%'
            ],
            [
                'id' => 55,
                'type' => 'dripline grade lowered',
                'name' => '10-25%'
            ],
            [
                'id' => 56,
                'type' => 'dripline grade lowered',
                'name' => '25-50%'
            ],
            [
                'id' => 57,
                'type' => 'dripline grade lowered',
                'name' => '50-75%'
            ],
            [
                'id' => 58,
                'type' => 'dripline grade lowered',
                'name' => '75-100%'
            ],
            [
                'id' => 59,
                'type' => 'exposure to wind',
                'name' => 'single tree'
            ],
            [
                'id' => 60,
                'type' => 'exposure to wind',
                'name' => 'below canopy'
            ],
            [
                'id' => 61,
                'type' => 'exposure to wind',
                'name' => 'above canopy'
            ],
            [
                'id' => 62,
                'type' => 'exposure to wind',
                'name' => 'recently exposed'
            ],
            [
                'id' => 63,
                'type' => 'exposure to wind',
                'name' => 'windward, canopy edge'
            ],
            [
                'id' => 64,
                'type' => 'exposure to wind',
                'name' => 'area prone to windthrow'
            ],
            [
                'id' => 65,
                'type' => 'prevailing wind direction',
                'name' => 'North'
            ],
            [
                'id' => 66,
                'type' => 'prevailing wind direction',
                'name' => 'East'
            ],
            [
                'id' => 67,
                'type' => 'prevailing wind direction',
                'name' => 'South'
            ],
            [
                'id' => 68,
                'type' => 'prevailing wind direction',
                'name' => 'West'
            ],
            [
                'id' => 69,
                'type' => 'common weather',
                'name' => 'strong winds'
            ],
            [
                'id' => 70,
                'type' => 'common weather',
                'name' => 'ice'
            ],
            [
                'id' => 71,
                'type' => 'common weather',
                'name' => 'snow'
            ],
            [
                'id' => 72,
                'type' => 'common weather',
                'name' => 'heavy rain'
            ],
            [
                'id' => 73,
                'type' => 'common weather',
                'name' => 'other'
            ],
        ];
        TreeSiteCondition::insert($treeSiteConditions);
    }
}
