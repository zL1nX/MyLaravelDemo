<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Grade;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GradeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $result=User::where('is_admin',0);
        $users=$result->get();
        $count=$result->count();
        return view('Admin.list',compact('count','users'));
    }
}
