<?php


use Illuminate\Support\Facades\Cache;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'v1'], function (){
    Route::get('/', ['as' => 'index','uses' => 'HomeController@index']);
});


  
        
    
Route::get('/cache', function () {
    
    $data2 = array("name"=>"callback2" , "value"=>"test");
    $data1 = array("name"=>"callback1" , "value"=>"test");
    $rs1 = http_build_query($data1);      //直接调用php函数
    $rs2  = call_user_func(function($str){
        return http_build_query($str);
    },$data2); //使用回调函数
    
    echo $rs1; 
    echo "<br />";
    echo $rs2;  
    return Cache::get('key');
});
        
