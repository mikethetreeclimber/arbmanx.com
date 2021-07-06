<?php

use App\Models\Trees\Tree;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function(){
    $searchTerm = 'red';
    $collection = Tree::where('common_name', 'LIKE',  '%'.' '.$searchTerm.'%')->get(['id', 'common_name']);

    $trees = $collection->map(function($item, $key){
            return [ 'value'=> $item->id, 'description'=>$item->common_name];
        });
        return collect($trees);


});