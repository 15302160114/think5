<?php
namespace app\admin\controller;
use think\Controller;

class AdminhotaiController extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    public function zhanghao(){
    	$a=explode(',', session('my_user','','my'));
    	$id=substr($a[0],6);
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$admin=model('Admin')->get($id);
		
		$this->assign('admin',$admin);
    	return $this->fetch();
    }
    public function fenlei()
    {
    	$categorys=model('Category')->getCategorys();
    	$this->assign('categorys',$categorys);
        return $this->fetch();
    }
    public function article()
    {
    	$categorys=model('Category')->getCategorys();
    	$articles=model('Article')->getArticles();
    	$this->assign('categorys',$categorys);
    	$this->assign('articles',$articles);
        return $this->fetch();
    }
    public function delete(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$category=model('Category')->get($id);
		if(!is_null($category->delete())){
			$this->success('删除成功','adminhotai/fenlei');
		}
		$this->error('删除失败');
	}
	public function authordelete(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$author=model('Author')->get($id);
		if(!is_null($author->delete())){
			$this->success('删除成功','adminhotai/user');
		}
		$this->error('删除失败');
	}
	public function articledelete(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$article=model('Article')->get($id);
		if(!is_null($article->delete())){
			$this->success('删除成功','adminhotai/article');
		}
		$this->error('删除失败');
	}
	public function save(){
		echo "<meta charset='UTF-8'>";
		if(!request()->isPost()){
			$this->error("非法输入");
		}
		$input=input('post.');

		$validate=validate('Category');
		if(!$validate->scene('add')->check($input)){
			$this->error($validate->getError());
		}
		
		$date=[
				'categoryname'=>$input['categoryname']
			];

		$xuhao=model('Category')->add($date);
		if($xuhao){
			$this->success('增加成功',url('adminhotai/fenlei'));
		}else{
			$this->error('增加失败');
		}
	}
	public function edit(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$author=model('Author')->get($id);
		$this->assign('author',$author);
		return $this->fetch('');
	}
	public function update(){
		echo "<meta charset='UTF-8'>";
		if(!request()->isPost()){
			$this->error("非法输入");
		}
		$input=input('post.');

		$validate=validate('Admin');
		if(!$validate->scene('edit')->check($input)){
			$this->error($validate->getError());
		}
		
		$date=[
				'username'=>$input['username'],
				'realname'=>$input['realname'],
				'password'=>$input['password']
			];

		$xuhao=model('Admin')->save($date,['id'=>intval($input['id'])]);
		if($xuhao){
			$this->success('更新成功',url('adminhotai/zhanghao'));
		}else{
			$this->error('更新失败');
		}
	}
	public function user(){
		$author=model('Author')->getAuthor();
	  	return $this->fetch('',['author'=>$author]);
	}
    public function logout(){
        session(null,'my');
        $this->redirect('login/index');
    }
}
