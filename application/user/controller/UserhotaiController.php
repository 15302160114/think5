<?php
namespace app\user\controller;
use think\Controller;
use think\File;

class UserhotaiController extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    public function zhanghao()
    {
        $a=explode(',', session('my_user','','my'));
    	$id=substr($a[0],6);
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$author=model('Author')->get($id);
		
		$this->assign('author',$author);
		return $this->fetch('');
    }
    public function add(){
    	$a=explode(',', session('my_user','','my'));
    	$id=substr($a[0],6);
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
    	$author=model('Author')->get($id);
		$this->assign('author',$author);
    	$categorys=model('Category')->getCategorys();
		$this->assign('categorys',$categorys);
		$articles=model('Article')->getArticles();
		$this->assign('articles',$articles);
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
		$categorys=model('Category')->getCategorys();
		$this->assign('categorys',$categorys);
		return $this->fetch();
	}
	function upload(){
        $file = request()->file('file');

        $data['status'] = 1;   
        if(empty($file)){  
          //  $this->error('文件导入错误');
           $data['status'] =0;   
        }
      
        $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');
        if(!$info){             
            //  $this->error('文件上传错误');
             $data['status'] =0;   
             
        } 
        
         $data['url'] =$info->getFilename();
         unset($info);
        
      
         return json_encode($data);
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
				'tel'=>$input['tel'],
				'email'=>$input['email'],
				'note'=>$input['note'],
				'password'=>$input['password']
			];

		$xuhao=model('Author')->save($date,['id'=>intval($input['id'])]);
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
