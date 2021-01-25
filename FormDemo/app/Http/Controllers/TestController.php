<?php
/**
 * Created by PhpStorm.
 * User: 10071
 * Date: 2018/1/25
 * Time: 9:58
 */
namespace App\Http\Controllers;
use App\Form;

class TestController extends Controller
{
    public function test()
    {
        $res=new Form();
        //dd($res);
        var_dump($res->sex);
    }
}