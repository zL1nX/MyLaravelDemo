<?php
/**
 * Created by PhpStorm.
 * User: 10071
 * Date: 2018/1/22
 * Time: 8:54
 */
namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Adapter\Polyfill\StreamedReadingTrait;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class StudentController extends Controller
{
    public function test1()
    {
        //$res=DB::select('select * from student');
        //$res=DB::insert("insert into student(name,age) values('zxl',45)");
        //$res=DB::update("update student set age=12 where id=1001");
        $res=DB::delete('delete from student where id = 1001');
        var_dump($res);
    }
    public function query1()
    {
        //$res=DB::table('student')->insert(['name'=>'wer','age'=>23]);
        $res=DB::table('student')->insertGetId(['name'=>'qwe','age'=>45]);

        var_dump($res);
    }
    public function query2()
    {
        //$res=DB::table('student')->where('id',1002)->update(['age'=>30]);
        //$res=DB::table('student')->increment('age',3);
        $res=DB::table('student')->decrement('age');
        var_dump($res);
    }
    public function query3()
    {
        $res=DB::table('student')->where('id',1004)->delete();
        var_dump($res);
    }
    public function query4()
    {
        //$res=DB::table('student')->get();
        //$res=DB::table('student')->first();
        //$res=DB::table('student')->where('id',1003)->pluck("age");
        //$res=DB::table('student')->where('id',1003)->lists("name",'id');
        //$res=DB::table('student')->select("name",'id')->get();
        DB::table('student')->chunk(1,function($res)
        {
            var_dump($res);
        });
        //var_dump($res);
    }
    public function query5()
    {
        //$res=DB::table('student')->count();
        $res=DB::table('student')->max('age');
        var_dump($res);
    }
    public function orm1()
    {
        //$res=Student::all();
        //$res=Student::find(1002);
        //$res=Student::findOrFail(1005);
        $res=Student::get();
        //orm中也可以用查询构造器的语法
        dd($res);
    }
   public function orm2()
   {
        /*$stu=new Student();
        $stu->name='haha';
        $stu->age=13;
        $stu->save();*/
        $res=Student::create(
            [
                'name'=>'asdasd',
                'age'=>34
            ]
        );//默认不允许批量赋值，需要加属性
        //findOrCreate()
       //firstOrNew()
       dd($res);
   }
   public function orm3()
   {
       /*$res=Student::find(1003);
       $res->name='sean';
       $bool=$res->save();
       var_dump($bool);*/
       $res=Student::where('id','<',1005)->update(
           ['age'=>23]
       );
       var_dump($res);
   }
   public function orm4()
   {
       /*$res=Student::find(1005);
       $bool=$res->delete();*/
       $bool=Student::destroy(1006);
       var_dump($bool);
   }
   public function show1()
   {
       $name='asd';
       return view('stu',[
           'name'=>$name
       ]);
   }
   public function request1(Request $request)
   {
        /*echo $request->input('name','asd');
        echo $request->has('name');
        dd($request->all());*/
        echo $request->method();
   }
   public function session1(Request $request)
   {
       /*$request->session()->put('key1','value1');
       echo $request->session()->get('key1');*/
       /*session()->put('key2','value2');
       echo session()->get('key2');*/
       /*Session::put('key3','value3');
       echo Session::get('key3');*/
       /*Session::put(['key4'=>'value4']);
       echo Session::get('key4');*/
       /*Session::push('student','asd');
       Session::push('student','dfg');
       $res=Session::get('student','default');
       var_dump($res);*/
   }
   public function session2(Request $request)
   {
    //
       return Session::get('message','nooo');
   }
   public function response()
   {
       /*$data=[
           'errCode'=>0,
           'errMsg'=>'success',
           'data'=>'sean'
       ];
       //var_dump($data);
       return response()->json($data);*/
       return redirect('session2')->with('message','flashhh');
   }
   public function act0()
   {
       return 'about to start';
   }
   public function act1()
   {
       return 'ing';
   }
    public function act2()
    {
        return 'ing';
    }
}