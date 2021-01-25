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

Route::get('/', 'WelcomeController@index');


Route::get('login',[
    'middleware'=>'guest','as'=>'login','uses'=>'loginController@loginGet'
]);
Route::post('login',[
    'middleware'=>'guest','uses'=>'loginController@loginPost'
]);
Route::get('logout',[
    'middleware'=>'auth','as'=>'logout','uses'=>'loginController@logout'
]);



Route::any('stu/home', [
    'as' => 'stu_home', 'uses' => 'Stu\StudentController@home']);
Route::get('stu/edit', [
    'as' => 'stu_edit', 'uses' => 'Stu\StudentController@edit']);
Route::post('stu/update', [
    'as' => 'stu_update', 'uses' => 'Stu\StudentController@update']);


Route::get('admin/grade', [
    'as' => 'grade_list', 'uses' => 'Admin\GradeController@index']);
#资源路由,学生的增删改查
//Route::resource('admin', 'Admin\AdminController');
Route::any('admin/{id}','Admin\AdminController@destroy');
Route::any('admin','Admin\AdminController@index');
#上传分数
Route::post('admin/upload_grade', [
    'as' => 'upload_grade', 'uses' => 'Admin\AdminController@upload_grade']);