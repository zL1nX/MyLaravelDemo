<?php
/**
 * Created by PhpStorm.
 * User: 10071
 * Date: 2018/1/22
 * Time: 8:34
 */
namespace App;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public static function getMember()
    {
        return "name";
    }
}