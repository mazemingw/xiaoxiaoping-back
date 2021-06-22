<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;


class CheckLogin
{
    /**
     * Handle an incoming request.
     * 登录检查中间件（middleware） 用来检查有没有登录，权限控制
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Session::has('adminid')){
            return $next($request);
        }else{
            return redirect('admin/login');
        }
        
    }
}

