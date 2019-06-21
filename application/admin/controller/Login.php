<?php
namespace app\admin\controller;
use think\Controller;
use think\captcha\Captcha;
use Request;
use Db;
class Login extends Controller
{
	// public function verify()
 //    {
 //    	$captcha = new Captcha();
 //      $captcha->entry();
 //      return $captcha->entry();		
 //    }
    public function login()
    {
      return $this->fetch();		
    }
    public function loginAction()
    {
      $code=Request::post('code');
      $name=Request::post('name');
      $password=Request::post('password');	
      $captcha = new Captcha();
      if ( !$captcha->check($code)){
      		$arr=['code'=>'1','status'=>'error','message'=>'验证码错误'];
      	}else{
      		$where=['name'=>$name,'password'=>$password];
      		$res=Db::table('admin')->where($where)->find();
      		if (empty($res)) {
      			$arr=['code'=>'2','status'=>'error','message'=>'账号或密码错误'];
      		}else{
      			$arr=['code'=>'0','status'=>'ok','message'=>'登陆成功'];
      		}
      	}
      	$json=json_encode($arr);
      	echo $json;	
    }
     
}
