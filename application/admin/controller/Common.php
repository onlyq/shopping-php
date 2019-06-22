<?php
namespace app\admin\controller;
use think\Controller;
use think\facade\Session;
class Common extends Controller
{
    public function initialize()
    {
      $name=Session::get('name');
      if(empty($name)){
      	$this->redirect('login/login');
      }else{
      	$this->assign('name',$name);
      }
    }
    // public function __construct()
    // {
    //   //parent::__construct();
    // 	echo 123;die;	
    // }
}
