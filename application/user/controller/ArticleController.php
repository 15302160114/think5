<?php
namespace app\user\controller;
use think\Controller;
use think\Db;
class ArticleController extends Controller
{
    public function index()
    {
      $article=model('Article')->getArticle();
	  return $this->fetch('',['article'=>$article]);
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
			$this->success('增加成功',url('article/index'));
		}else{
			$this->error('增加失败');
		}
	}
	public function delete(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$article=model('Article')->get($id);
		if(!is_null($article->delete())){
			$this->success('删除成功','article/index');
		}
		$this->error('删除失败');
	}
	public function detail(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$article=model('Article')->get($id);
		
		$this->assign('article',$article);
		return $this->fetch('');
	} 
	public function edit(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$article=model('Article')->get($id);
		$this->assign('article',$article);
		return $this->fetch('');
	}
	public function update(){
		echo "<meta charset='UTF-8'>";
		if(!request()->isPost()){
			$this->error("非法输入");
		}
		$input=input('post.');

		$validate=validate('Article');
		if(!$validate->scene('edit')->check($input)){
			$this->error($validate->getError());
		}
		
		$date=[
				'id'=>$input['id'],
				'title'=>$input['title'],
				'content'=>$input['content']
			];

		$xuhao=model('Article')->save($date,['id'=>intval($input['id'])]);
		if($xuhao){
			$this->success('更新成功',url('article/index'));
		}else{
			$this->error('更新失败');
		}
	}
}
