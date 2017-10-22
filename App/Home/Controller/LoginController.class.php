<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	 /*public function _initialize(){
        $close=M('close');
        $result=$close->find();
        if($result['close']==1){
            $this->redirect("Public/a");
        }
    }
    
	public function login(){
		$this->display();
	}
	public function register(){
		$this->display();
	}
	//修改密码
	public function pwd(){
		$this->display();
	}
	public function two(){
		$this->display();
	}
	public function three(){
		$this->display();
	}
	public function four(){
		$this->display();
	}
	public function five(){
		$this->display();
	}
	public function smalllogin(){
		$this->display();
	}

   
	//ajax判断
	public function checkname(){
		$user = M('user');
		$user1 = I('user');
		if($user->where("user = '$user1'")->find()){
			echo 1;
		}else{
			echo 0;
		}
	}
	//登陆
	public function dologin(){
		// session('[start]');
		//接收
		 $user = M("user");
		 //获取ID
         $name = I('user');
         //获取密码
         $pass = I('pass');
         $pass=md5($pass);
         //查询密码是否一致
         $data = $user->where("user='{$name}' and pass='{$pass}'")->select();
        if($data){
        	//session接收id
        	  	session('name',$name);
        	  	
				session('id',$data[0]['id']);
       	//获得最后登录时间
            $user = M("user");
         //获得时间
            $time['ltime']=time();
            $id= session('id');
         //查询id改变时间
            $aa=$user-> where("id = $id")->save($time);
            if (session("url")=='') {
            	$this->redirect("Index/index");
            }else{
            	$url=session("url");
            	// var_dump($url);exit;
            	// echo "<script>window.location.href="+$url+";</script>";
            	// $this->redirect("index/index");
            	redirect($url);
            	// $this->success("登陆成功","$url");
            }
            
        }else{
          $this->error("登录失败！！");
        }

	}
	public function clearsession(){
		session('name',null);
		session('id',null);
		session("cart_num",null);
		session("url",null);
		$this->redirect('Index/index');
	}


	//注册
	public function doregister(){
		$user = M('user');
	    $data['ltime'] = time();				//最后登录时间			
	    $data['user'] = I('user');				//用户名
	    $data['pass'] = md5(I('pass'));				//密码
	    $time['time'] = time();					//注册时间
	    $re = $user->add($data);
	    if($re){
	    	session('name',$data['user']);		//session name
	    	session('id',$re);		//session name
	    	echo "1";
	    }else{
	    	echo "0";
	    }
    }
	//找回密码
	public function pwd_one(){
		$user =M('user');
		$aa = I();
		$id = I('username');
		$username=I('username');
		//从user表查询上面的$username
		$find = $user -> where("user='$username'")->find();

		// session("mail_e",$find['mail']);
		session("id_id",$find['id']);
		if($find){
			$this->redirect("two");
		}else{
			$this->error("请输入正确用户");
		}
	}
	//验证信息
 	public function pwd_three(){
 		$user = M('user');
 		$cont = I();
 		$issue = I('issue');
 		$id=session("id_id");
 		$find = $user -> where("issue = '{$issue}' and id = '{$id}'")->find();
 		// var_dump($issue);exit;
 		if($find){
 			$this->redirect("four");
 		}else{
 			$this->error("请输入正确信息");
 		}
    }


    //重置密码
    public function pwd_four(){
    	$data['pass'] = I('pass');
    	$data['renewpwd'] = I('renewpwd');
    	$data['id']=session("id_id");
    	if($data['pass'] == $data['renewpwd']){
           $data['pass'] = md5($data['pass']);
           $user=M('user');
           $user->save($data);
    	// dump($user->save($data));exit;
    	}else{
    		$this->error("修改失败");
    	}
    	$this->redirect("five");

    }
    public function rightstrip(){
        $cartsql = M('cart');
        $uid = session('id');
        $cartnum = $cartsql->where("uid=$uid")->count();
        session("cart_num",$cartnum);
    }*/
	public function index(){
		$this->display();
	}
	public function register(){
		$this->display();
	}
    //验证登录
    public function login(){
    	$verify = isset($_POST['code'])?trim($_POST['code']):'';
		if (!$this->check_verify($verify,'login')) {
			echo 1;die;//验证码错误
		}
		$username = isset($_POST['user'])?trim($_POST['user']):'';
		$password = isset($_POST['password'])?md5(trim($_POST['password'])):'';
		$remember = isset($_POST['remember'])?$_POST['remember']:0;
		if ($username=='') {
			$this -> error('用户名不能为空！',U("login/index"));
		} elseif ($password=='') {
			$this -> error('密码必须！',U("login/index"));
		}
		$model = M("user");
		$is_exist = $model ->field('uid,user')-> where(array('user'=>$username)) -> find();
		$user = $model ->field('uid,user')-> where(array('user'=>$username,'password'=>$password)) -> find();
		
		if($user) {
			if($remember){
				cookie('user',$user,time+3600);//记住我
			}
			session('user',$user);
			session('uid',$user['uid']);
			$this->userLog();
			echo 2;
		}else{
			if($is_exist){
				echo 3;//密码错误
			}else{
				echo 4;//用户名不存在
			}
			
		}
    }
    //注册验证
    public function checkRegister(){
    	$user = isset($_REQUEST['user'])?trim($_REQUEST['user']):"";
    	$password = isset($_REQUEST['password'])?trim($_REQUEST['password']):"";
    	$repassword = isset($_REQUEST['repassword'])?trim($_REQUEST['repassword']):"";
    	$email = isset($_REQUEST['email'])?trim($_REQUEST['email']):"";
    	if($user == "" || $password == "" || $repassword == "" || $email == "" || $password != $repassword){
    		$this->error("注册失败",U('Login/index'));die;
    	}
    	$data = array('user'=>$user,'password'=>$password,'email'=>$email);
    	$res = M('user')->add($data);
    	if($res){
    		$user_info = M('user')->where("id = {$res['uid']}")->find();
    		session('user',$user_info);
    		session('uid',$user_info['uid']);
    		echo 1;
    	}else{
    		echo 2;
    	}
    }
    //注册验证用户名
    public function checkName(){
    	$user = $_REQUEST['user'];
    	$res = M('user')->where("user = '{$user}'")->find();
    	if(!$res){
    		echo 1;
    	}
    }
	//生成验证码
	public function verify() {
		$config = array(
			'fontSize' => 14, // 验证码字体大小
			'length' => 4, // 验证码位数
			'useNoise' => false, // 关闭验证码杂点
			'imageW'=>100,
			'imageH'=>30,
		);
		$verify = new \Think\Verify($config);
		$verify -> entry('login');
	}
	//验证码检查
	public function check_verify($code,$id="") {
		$verify = new \Think\Verify();
		return $verify -> check($code,$id);
	}
	//登录日志
	public function userLog(){
		$data = array();
		$data['uid'] = $_SESSION['uid'];
		$data['time'] = time();
		$data['ip'] = get_client_ip();
		M('user_log')->add($data);
	}
	//找回密码页面1
	public function pwd(){
		$this->display();
	}
	//找回密码页面2
	public function pwdOne(){
		$m=M('user');
		$user = isset($_REQUEST['user'])?trim($_REQUEST['user']):"";
		$res = $m->where("user = '{$user}'")->find();
		if($res){
			echo 1;
		}else{
			echo 2;
		}
	}

}