<?php
namespace app\user\controller;
use think\Controller;

class AdminhotaiController extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function logout(){
        session(null,'my');
        $this->redirect('login/index');
    }
}
