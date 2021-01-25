<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('test1',['uses'=>'StudentController@test1']);
Route::get('show1',['uses'=>'StudentController@show1']);
Route::any('response',['uses'=>'StudentController@response']);
Route::group(['middleware'=>['web']],function(){
    Route::any('session1',['uses'=>'StudentController@session1']);
    Route::any('session2',['uses'=>'StudentController@session2']);
});
Route::any('act0',['uses'=>'StudentController@act0']);
Route::group(['middleware'=>['act']],function(){
    Route::any('act1',['uses'=>'StudentController@act1']);
    Route::any('act2',['uses'=>'StudentController@act2']);

});*/
Route::group(['middleware'=>['web']],function(){
    Route::any('student/index',['uses'=>'FormController@index']);
    Route::any('student/create',['uses'=>'FormController@create']);
    Route::any('student/save',['uses'=>'FormController@save']);
    Route::any('student/update/{id}',['uses'=>'FormController@update']);
    Route::any('student/detail/{id}',['uses'=>'FormController@detail']);
    Route::any('student/delete/{id}',['uses'=>'FormController@delete']);
});
Route::any('test',['uses'=>'TestController@test']);
//Route::get('member','MemberController@info');
//Route::get('member/info','MemberController@info');
//Route::get('member/info',['uses'=>'MemberController@info']);
/*Route::any('member/info',[
    'uses'=>'MemberController@info',
    'as'=>'memberinfo'
]);*/
//基础路由
/*Route::get('basic1',function(){
    return "hello";
});
Route::post('basic2',function()
{
    return "hello2";
});

//多请求路由
Route::match(['get','post'],'mt1',function()
{
    return 'mult1';
});
Route::any('any-route',function()
{
    return 'mult2';
});*/

//路由参数
/*Route::get('user/{id}',function($id)
{
   return 'User-id-'.$id;
});*/
/*Route::get('user/{name?}',function($name=NULL)
{
    return 'User-name-'.$name;
});*/

//路由别名
/*Route::get('user/member-center',['as'=>'center',function()
{
    return route('center');
}]);*/

//路由群组
/*Route::group(['prefix'=> 'member'],function()
{
    Route::get('user/member-center',['as'=>'center',function()
    {
        return route('center');
    }]);
    Route::get('basic1',function(){
        return "member-hello";
    });
});*/

//路由中输出视图
/*Route::get('view',function(){
   return view('welcome');
});*/