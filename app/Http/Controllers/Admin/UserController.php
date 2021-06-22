<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\admin;
class UserController{
    function login(){
        return view ('admin/user/login');
    }
	function check(Request $request){
		$username = $request->get('username');
		$password = $request->get('password');
		$ob = Admin::where('username',$username)
			 ->where('password',$password)
			 ->first();
		if($ob){
			//创建session
			Session::put(['username'=>$username,'adminid'=>$ob->id]);
			//更新此用户的登录时间
			$ob->lastlogintime=time();
			$ob->save();
			//跳转到后台的首页
			return redirect('admin')->with('message',"登录成功");
		}else{
			//跳转回登录页
			return redirect()->back()->with('message',"登录失败");
		}
	}
}