<?php
namespace app\user\controller;
use think\Controller;
use think\captcha;

class LoginController extends Controller
{
    public function index()
    {
      	return $this->fetch();
    }
    public function signup(){
        return $this->fetch();
    }
    public function save(){
        echo "<meta charset='UTF-8'>";
        if(!request()->isPost()){
            $this->error("非法输入");
        }
        
        $input=input('post.');

        $username=$input['username'];
        $user=model('Author')->getAuthorByuserName($username);
        if($user){
            $this->error('用户名不可用');
        }
        if(!captcha_check($input['captcha'])){          
            $this->error('验证码错误');
        }

        $validate=validate('Author');
        if(!$validate->scene('add')->check($input)){
            $this->error($validate->getError());
        }

        $suiji=rand(1000,9999);
        
        $date=[
                'email'=>$input['email'],
                'code'=>$suiji,
                'username'=>$input['username'],
                'password'=>md5($input['password']),
            ];

        $xuhao=model('Author')->add($date);
        if($xuhao){
            $this->success('增加成功，新增序号为'.$xuhao,url('login/index'));
        }else{
            $this->error('增加失败');
        }
    }
    public function check(){
    	if(!request()->isPost()){
    		$this->error('有错');
    	}
    	$data=input('post.');
    	$username=$data['username'];
    	$author=model('Author')->getAuthorByuserName($username);
    	if(!$author){
    		$this->error('有错');
    	}
        if(!captcha_check($data['captcha'])){          
            $this->error('验证码错误');
        }
    	if($author->password!=md5($data['password'])){
    		$this->error('密码有错');
    	}
    	session('me_user',$author,'me');
    	$this->success('ok','userhotai/index');
    }
}
