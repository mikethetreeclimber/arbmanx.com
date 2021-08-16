<?php

namespace Database\Seeders;

use App\Models\Tree\TreeSiteCondition;
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
                'section' => 'site character',
                'value' => 'residence'
            ],
            [
                'id' => 2,
                'section' => 'site character',
                'value' => 'commercial'
            ],
            [
                'id' => 3,
                'section' => 'site character',
                'value' => 'industrial'
            ],
            [
                'id' => 4,
                'section' => 'site character',
                'value' => 'park'
            ],
            [
                'id' => 5,
                'section' => 'site character',
                'value' => 'open space'
            ],
            [
                'id' => 6,
                'section' => 'site character',
                'value' => 'natural'
            ],
            [
                'id' => 7,
                'section' => 'site character',
                'value' => 'woodland\forest'
            ],
            [
                'id' => 8,
                'section' => 'landscape',
                'value' => 'parkway'
            ],
            [
                'id' => 9,
                'section' => 'landscape',
                'value' => 'raised bed'
            ],
            [
                'id' => 10,
                'section' => 'landscape',
                'value' => 'container'
            ],
            [
                'id' => 11,
                'section' => 'landscape',
                'value' => 'mound'
            ],
            [
                'id' => 12,
                'section' => 'landscape',
                'value' => 'lawn'
            ],
            [
                'id' => 13,
                'section' => 'landscape',
                'value' => 'shrub border'
            ],
            [
                'id' => 14,
                'section' => 'landscape',
                'value' => 'wind break'
            ],
            [
                'id' => 15,
                'section' => 'irrigation',
                'value' => 'none'
            ],
            [
                'id' => 16,
                'section' => 'irrigation',
                'value' => 'adequate'
            ],
            [
                'id' => 17,
                'section' => 'irrigation',
                'value' => 'inadequate'
            ],
            [
                'id' => 18,
                'section' => 'irrigation',
                'value' => 'excessive'
            ],
            [
                'id' => 19,
                'section' => 'irrigation',
                'value' => 'trunk wettled'
            ],
            [
                'id' => 20,
                'section' => 'disturbance',
                'value' => 'construction'
            ],
            [
                'id' => 21,
                'section' => 'disturbance',
                'value' => 'soil disturbance'
            ],
            [
                'id' => 22,
                'section' => 'disturbance',
                'value' => 'grade change'
            ],
            [
                'id' => 23,
                'section' => 'disturbance',
                'value' => 'line clearing'
            ],
            [
                'id' => 24,
                'section' => 'disturbance',
                'value' => 'site clearing'
            ],
            //
            [
                'id' => 25,
                'section' => 'soil problems',
                'value' => 'drainage'
            ],
            [
                'id' => 26,
                'section' => 'soil problems',
                'value' => 'shallow'
            ],
            [
                'id' => 27,
                'section' => 'soil problems',
                'value' => 'compacted'
            ],
            [
                'id' => 28,
                'section' => 'soil problems',
                'value' => 'droughty'
            ],
            [
                'id' => 29,
                'section' => 'soil problems',
                'value' => 'saline'
            ],
            [
                'id' => 30,
                'section' => 'soil problems',
                'value' => 'alkaline'
            ],
            [
                'id' => 31,
                'section' => 'soil problems',
                'value' => 'acidic'
            ],
            [
                'id' => 32,
                'section' => 'soil problems',
                'value' => 'small volume'
            ],
            [
                'id' => 33,
                'section' => 'soil problems',
                'value' => 'disease center'
            ],
            [
                'id' => 34,
                'section' => 'soil problems',
                'value' => 'history of fail'
            ],
            [
                'id' => 35,
                'section' => 'soil problems',
                'value' => 'clay'
            ],
            [
                'id' => 36,
                'section' => 'soil problems',
                'value' => 'expansive'
            ],
            [
                'id' => 37,
                'section' => 'obstructions',
                'value' => 'lights'
            ],
            [
                'id' => 38,
                'section' => 'obstructions',
                'value' => 'signage'
            ],
            [
                'id' => 39,
                'section' => 'obstructions',
                'value' => 'line-of-sight'
            ],
            [
                'id' => 40,
                'section' => 'obstructions',
                'value' => 'view'
            ],
            [
                'id' => 41,
                'section' => 'obstructions',
                'value' => 'overhead lines'
            ],
            [
                'id' => 42,
                'section' => 'obstructions',
                'value' => 'underground utilities'
            ],
            [
                'id' => 43,
                'section' => 'obstructions',
                'value' => 'traffic'
            ],
            [
                'id' => 44,
                'section' => 'obstructions',
                'value' => 'adjacent veg.'
            ],
            [
                'id' => 45,
                'section' => 'obstructions',
                'value' => 'other'
            ],
            [
                'id' => 46,
                'section' => 'pavement lifted',
                'value' => 'true'
            ],
            [
                'id' => 47,
                'section' => 'dripline paved',
                'value' => '10-25%'
            ],
            [
                'id' => 48,
                'section' => 'dripline paved',
                'value' => '25-50%'
            ],
            [
                'id' => 49,
                'section' => 'dripline paved',
                'value' => '50-75%'
            ],
            [
                'id' => 50,
                'section' => 'dripline paved',
                'value' => '75-100%'
            ],
            [
                'id' => 51,
                'section' => 'dripline w/fill soil',
                'value' => '10-25%'
            ],
            [
                'id' => 52,
                'section' => 'dripline w/fill soil',
                'value' => '25-50%'
            ],
            [
                'id' => 53,
                'section' => 'dripline w/fill soil',
                'value' => '50-75%'
            ],
            [
                'id' => 54,
                'section' => 'dripline w/fill soil',
                'value' => '75-100%'
            ],
            [
                'id' => 55,
                'section' => 'dripline grade lowered',
                'value' => '10-25%'
            ],
            [
                'id' => 56,
                'section' => 'dripline grade lowered',
                'value' => '25-50%'
            ],
            [
                'id' => 57,
                'section' => 'dripline grade lowered',
                'value' => '50-75%'
            ],
            [
                'id' => 58,
                'section' => 'dripline grade lowered',
                'value' => '75-100%'
            ],
            [
                'id' => 59,
                'section' => 'exposure to wind',
                'value' => 'single tree'
            ],
            [
                'id' => 60,
                'section' => 'exposure to wind',
                'value' => 'below canopy'
            ],
            [
                'id' => 61,
                'section' => 'exposure to wind',
                'value' => 'above canopy'
            ],
            [
                'id' => 62,
                'section' => 'exposure to wind',
                'value' => 'recently exposed'
            ],
            [
                'id' => 63,
                'section' => 'exposure to wind',
                'value' => 'windward, canopy edge'
            ],
            [
                'id' => 64,
                'section' => 'exposure to wind',
                'value' => 'area prone to windthrow'
            ],
            [
                'id' => 65,
                'section' => 'prevailing wind direction',
                'value' => 'North'
            ],
            [
                'id' => 66,
                'section' => 'prevailing wind direction',
                'value' => 'East'
            ],
            [
                'id' => 67,
                'section' => 'prevailing wind direction',
                'value' => 'South'
            ],
            [
                'id' => 68,
                'section' => 'prevailing wind direction',
                'value' => 'West'
            ],
            [
                'id' => 69,
                'section' => 'common weather',
                'value' => 'strong winds'
            ],
            [
                'id' => 70,
                'section' => 'common weather',
                'value' => 'ice'
            ],
            [
                'id' => 71,
                'section' => 'common weather',
                'value' => 'snow'
            ],
            [
                'id' => 72,
                'section' => 'common weather',
                'value' => 'heavy rain'
            ],
            [
                'id' => 73,
                'section' => 'common weather',
                'value' => 'other'
            ],
        ];
        TreeSiteCondition::insert($treeSiteConditions);
    }
}