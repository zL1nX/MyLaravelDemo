<?php
/**
 * Created by PhpStorm.
 * User: 10071
 * Date: 2018/1/23
 * Time: 19:48
 */
namespace App\Http\Middleware;
use Closure;
class Act
{
    public function handle($request,Closure $next)
    {
        //前置操作，在请求之前有逻辑
        if(time()<strtotime('2017-02-01'))
        {
            return redirect('act0');
        }
        return $next($request);
    }
}