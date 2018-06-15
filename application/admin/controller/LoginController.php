<?php
namespace app\admin\controller;
use think\Controller;
use think\captcha;

class LoginController extends Controller
{
    public function index()
    {
        // $teacher=session('my_user','','my');
        // if($teacher&&$teacher->id){
        //  $this->redirect('teacher/biaoge');
        // }
        return $this->fetch();
    }
    public function check(){
        if(!request()->isPost()){
            $this->error('有错');
        }
        $data=input('post.');
        $username=$data['username'];
        $admin=model('Admin')->getAdminByuserName($username);
        if(!$admin){
            $this->error('用户名有错');
        }
        if($admin->password!=$data['password']){
            $this->error('密码有错');
        }
        session('my_user',$admin,'my');
        $this->success('ok','adminhotai/index');
    }
    public function logout(){
        session(null,'my');
        $this->redirect('login/index');
    }
}
