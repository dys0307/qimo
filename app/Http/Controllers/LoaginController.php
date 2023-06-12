<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;

use DB;

class LoaginController extends Controller
{
    //实现login方法
    public function login(){
    	return view('login');
    }
    
    //实现loginout方法
    public function logout(){
    	$user = Input::get('user');
    	$pwd = Input::get('pwd');
    	$usertype = Input::get('usertype');
 		//dd($user."+".$pwd."+".$usertype);
 		
    	//判断usertype的值
    	switch($usertype){
    		case '1':
    		   //连接管理员表
    		   $db = DB::table('admin');
    		   $result = $db -> where('admin_id','=',$user)->where('password','=',$pwd)->value('name');
    		   if($result){
    		   		return view('admin/index');
    		   }else{
    		   		echo "<script>alert('登陆失败')</script>";
    		   		echo "<script>history.go(-1)</script>";
    		   		
    		   }
    		   break;
    		case '2':
    		   //连接教师表
    		   $db = DB::table('teacher');
    		   $result = $db -> where('teach_id','=',$user)->where('password','=',$pwd)->value('name');
    		   if($result){
    		   		return view('teacher/index');
    		   }else{
    		   		echo "<script>alert('登陆失败')</script>";
    		   		echo "<script>history.go(-1)</script>";
    		   		
    		   }
    		   break;
    		case '3':
    		   //连接学生表
    		   $db = DB::table('student');
    		   $result = $db -> where('stuno','=',$user)->where('password','=',$pwd)->value('name');
    		   if($result){
    		   		return view('student/index');
    		   }else{
    		   		echo "<script>alert('登陆失败')</script>";
    		   		echo "<script>history.go(-1)</script>";
    		   		
    		   }
    		   break;
    		default:
    		   //报错
			   echo "<script>alert('请选择用户类型')</script>";
    			echo "<script>history.go(-1)</script>";
    	}
    }
}
