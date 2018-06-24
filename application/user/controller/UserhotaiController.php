<?php
namespace app\user\controller;
use think\Controller;
use think\File;
use think\Db;

class UserhotaiController extends Base
{
    public function index()
    {
    	$a=explode(',', session('me_user','','me'));
    	$id=substr($a[0],6);
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$author=model('Author')->get($id);
		$this->assign('author',$author);
		
		$articles=Db::table('article')
					->where('author_id',$id)
					->select();

		$this->assign('articles',$articles);
        return $this->fetch();
    }
    public function zhanghao()
    {
        $a=explode(',', session('me_user','','me'));
    	$id=substr($a[0],6);
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$author=model('Author')->get($id);
		
		$this->assign('author',$author);
		return $this->fetch('');
    }
    public function add(){
    	$a=explode(',', session('me_user','','me'));
    	$id=substr($a[0],6);
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
    	$author=model('Author')->get($id);
		$this->assign('author',$author);
    	$categorys=model('Category')->getCategorys();
		$this->assign('categorys',$categorys);
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
				'title'=>$input['title'],
				'logo'=>$input['logo'],
				'author_id'=>$input['author_id'],
				'category_id'=>$input['category_id'],
				'description'=>$input['description'],
				'content'=>$input['content']
			];

		$xuhao=model('Article')->add($date);
		if($xuhao){
			$this->success('增加成功',url('userhotai/all'));
		}else{
			$this->error('增加失败');
		}
	}
	public function all(){
		$a=explode(',', session('me_user','','me'));
    	$id=substr($a[0],6);
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}

		$author=model('Author')->get($id);
		$this->assign('author',$author);
		
		$articles=Db::table('article')
					->where('author_id',$id)
					->select();

		$this->assign('articles',$articles);
		return $this->fetch();
	}
	function upload(){
		$a=explode(',', session('me_user','','me'));
    	$id=substr($a[0],6);
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
        $file = $this->request->file('file');
        //file是传文件的名称，这是webloader插件固定写入的。因为webloader插件会写入一个隐藏input，不信你们可以通过浏览器检查页面
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'. DS .$id,'');
    }
    public function edit(){
    	$a=explode(',', session('me_user','','me'));
    	$aid=substr($a[0],6);
		if($aid==0||is_null($aid)){
			$this->error('参数有误');
		}
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$author=model('Author')->get($aid);
		$this->assign('author',$author);
		$article=model('Article')->get($id);
		$this->assign('article',$article);
		$categorys=model('Category')->getCategorys();
		$this->assign('categorys',$categorys);
		return $this->fetch('');
	}
	public function delete(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$article=model('Article')->get($id);
		if(!is_null($article->delete())){
			$this->success('删除成功','userhotai/all');
		}
		$this->error('删除失败');
	}
	public function wenzhangupdate(){
		echo "<meta charset='UTF-8'>";
		if(!request()->isPost()){
			$this->error("非法输入");
		}
		$input=input('post.');

		$validate=validate('Article');
		if(!$validate->scene('edit')->check($input)){
			$this->error($validate->getError());
		}

		$articles=Db::table('article')
					->where('author_id',intval($input['id']))
					->select('logo');
		
		$date=[
				'title'=>$input['title'],
				'category_id'=>$input['category_id'],
				'logo'=>$input['logo'],
				'description'=>$input['description'],
				'content'=>$input['content']
			];

		$xuhao=model('Article')->save($date,['id'=>intval($input['id'])]);
		if($xuhao){
			$this->success('更新成功',url('userhotai/all'));
		}else{
			$this->error('更新失败');
		}
	}
	public function update(){
		$a=explode(',', session('me_user','','me'));
    	$id=substr($a[0],6);
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}

		echo "<meta charset='UTF-8'>";
		if(!request()->isPost()){
			$this->error("非法输入");
		}
		$input=input('post.');

		$validate=validate('Userhotai');
		if(!$validate->scene('edit')->check($input)){
			$this->error($validate->getError());
		}

		$author=Db::table('author')
					->where('id',$id)
					->select();
		$pa=$author[0];	
		if($pa['password']==$input['password']){
			$date=[
				'username'=>$input['username'],
				'realname'=>$input['realname'],
				'tel'=>$input['tel'],
				'logo'=>$input['logo'],
				'email'=>$input['email']
			];
		}else{
			$date=[
				'username'=>$input['username'],
				'realname'=>$input['realname'],
				'tel'=>$input['tel'],
				'logo'=>$input['logo'],
				'email'=>$input['email'],
				'password'=>md5($input['password'])
			];
		}

		$xuhao=model('Author')->save($date,['id'=>intval($input['id'])]);
		if($xuhao){
			$this->success('更新成功',url('userhotai/zhanghao'));
		}else{
			$this->error('更新失败');
		}
	}
    public function logout(){
        session(null,'me');
        $this->redirect('login/index');
    }
}
