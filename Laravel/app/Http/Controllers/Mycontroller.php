<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function login(Request $request)
    {
    	$user = $request['name'];
    	$password= $request['pass'];
    	if(Auth::attempt(['email'=>$user,'password'=>$password]))
    	{
    		echo 'dang nhap thanh cong!'.'<br>';
    		$user=Auth::user();
    		echo $user->name.'<br>';
    		echo $user->email;
    	}
    	else
    	{
    		return view('dangnhap',['error'=>'Tên đăng nhập hoặc mật khẩu không đúng! Please try agian!']);
    	}
    }

}
