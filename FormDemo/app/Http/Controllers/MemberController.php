<?php
/**
 * Created by PhpStorm.
 * User: 10071
 * Date: 2018/1/21
 * Time: 16:18
 */

namespace App\Http\Controllers;
use App\Member;

class MemberController extends Controller
{
    public function info()
    {

        return Member::getMember();
        //return "member-id-".$id;
        //return route('memberinfo');
        //return view('memberTest');
    }
}