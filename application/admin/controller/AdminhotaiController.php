<?php
namespace app\admin\controller;
use think\Controller;

class AdminhotaiController extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    public function fenlei()
    {
    	$categorys=model('Category')->getCategorys();
    	$this->assign('categorys',$categorys);
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
    public function logout(){
        session(null,'my');
        $this->redirect('login/index');
    }
}
