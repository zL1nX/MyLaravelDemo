<?php

namespace App\Http\Controllers\Stu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
use App\User;
use App\Http\Requests\StudentMesRequest;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home()
    {

        $grade=Auth::user()->grade;
        return view('stu.home',compact('grade'));
    }
    public function edit()
    {
        return view('stu.edit');
    }
    public function update(StudentMesRequest $request)
    {
        Auth::user()->update($request->all());
        session()->flash('message','个人信息修改成功');
        return Redirect::route('stu_home');
    }
}
