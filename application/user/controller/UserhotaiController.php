<?php
namespace app\user\controller;
use think\Controller;

class UserhotaiController extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    public function zhanghao()
    {
        $id=input('param.id');
		// if($id==0||is_null($id)){
		// 	$this->error('参数有误');
		// }
		$userhotai=model('Userhotai')->get($id);
		
		$this->assign('userhotai',$userhotai);
		return $this->fetch('');
    }
    public function add(){
		return $this->fetch();
	}
	public function save(){
		echo "<meta charset='UTF-8'>";
		if(!request()->isPost()){
			$this->error("非法输入");
		}
		$input=input('post.');

		$validate=validate('Article');
		if(!$validate->scene('add')->check($input)){
			$this->error($validate->getError());
		}
		
		$date=[
				'id'=>$input['id'],
				'title'=>$input['title'],
				'content'=>$input['content']
			];

		$xuhao=model('Article')->add($date);
		if($xuhao){
			$this->success('增加成功',url('userhotai/add'));
		}else{
			$this->error('增加失败');
		}
	}
	public function all(){
		return $this->fetch();
	}
    public function edit(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$userhotai=model('Userhotai')->get($id);
		$this->assign('userhotai',$userhotai);
		return $this->fetch('');
	}
	public function update(){
		echo "<meta charset='UTF-8'>";
		if(!request()->isPost()){
			$this->error("非法输入");
		}
		$input=input('post.');

		$validate=validate('Userhotai');
		if(!$validate->scene('edit')->check($input)){
			$this->error($validate->getError());
		}
		
		$date=[
				'username'=>$input['username'],
				'realname'=>$input['realname'],
				'logo'=>$input['logo'],
				'code'=>$input['code'],
				'tel'=>$input['tel'],
				'email'=>$input['email'],
				'note'=>$input['note']
			];

		$xuhao=model('Userhotai')->save($date,['id'=>intval($input['id'])]);
		if($xuhao){
			$this->success('更新成功',url('userhotai/zhanghao'));
		}else{
			$this->error('更新失败');
		}
	}
    public function logout(){
        session(null,'my');
        $this->redirect('login/index');
    }
}
