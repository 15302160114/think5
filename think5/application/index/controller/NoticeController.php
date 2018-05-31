<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class NoticeController extends Controller
{
    public function index()
    {
      $notice=model('notice')->getNotice();
	  return $this->fetch('',['notice'=>$notice]);
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

		$validate=validate('Notice');
		if(!$validate->scene('add')->check($input)){
			$this->error($validate->getError());
		}
		
		$date=[
				'id'=>$input['id'],
				'title'=>$input['title'],
				'author_id'=>$input['author_id'],
				'description'=>$input['description'],
				'content'=>$input['content']
			];

		$xuhao=model('Notice')->add($date);
		if($xuhao){
			$this->success('增加成功',url('notice/index'));
		}else{
			$this->error('增加失败');
		}
	}
	public function delete(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$notice=model('Notice')->get($id);
		if(!is_null($notice->delete())){
			$this->success('删除成功','notice/index');
		}
		$this->error('删除失败');
	}
	public function detail(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$notice=model('Notice')->get($id);
		
		$this->assign('notice',$notice);
		return $this->fetch('');
	} 
	public function edit(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$notice=model('Notice')->get($id);
		$this->assign('notice',$notice);
		return $this->fetch('');
	}
	public function update(){
		echo "<meta charset='UTF-8'>";
		if(!request()->isPost()){
			$this->error("非法输入");
		}
		$input=input('post.');

		$validate=validate('Notice');
		if(!$validate->scene('edit')->check($input)){
			$this->error($validate->getError());
		}
		
		$date=[
				'id'=>$input['id'],
				'title'=>$input['title'],
				'author_id'=>$input['author_id'],
				'description'=>$input['description'],
				'content'=>$input['content']
			];

		$xuhao=model('Notice')->save($date,['id'=>intval($input['id'])]);
		if($xuhao){
			$this->success('更新成功',url('notice/index'));
		}else{
			$this->error('更新失败');
		}
	}
}
