<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	//用构造方法禁止输入网站跳转页面
	public function _initialize(){
		if(session('admin')==null){
			$this->redirect("User/user_login");
		}
	}
    public function index(){
    	$this->display();
    }
<<<<<<< HEAD
    public function new_index(){
	echo 44;
=======
    public function new_index1(){
	 echo 2;
>>>>>>> 7c5c847b96060b022b8699eb4b81b54d550818ef
    	$this->display();
    }
}
