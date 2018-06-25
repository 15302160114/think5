<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class IndexController extends Controller
{
    public function index()
    {
        $categorys=model('Category')->getCategorys();
        $this->assign('categorys',$categorys);
        $articles=model('Article')->getArticles();
        $this->assign('articles',$articles);
      	return $this->fetch();
    }
    public function up(){
        // $id=input('post.id');
        // $up=input('post.up');
        
        // Db::table('Article')->where('id', $id)->update(['up' => $up]);
        // return json_encode("点赞成功");

        if (!request()->isAjax()){
           return ;
        }
        $up=input('post.m');
        $id=input('post.id');

        $dataup=['up'=>$up];
  
        $result=model('Article')->save($dateup,['id'=>intval($id)]);
        if($result!=0){
             $data=[
                'info'=>'点赞成功',
                'status'=>1,
            ];  
            return json_encode($data);
        }else{
            return json_encode('更新失败');
        }
         
    }
    public function updateUpNum($data){
         return $this->where($data)->setInc('up',1);
    }
    public function single()
    {
        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $articles=model('Article')->get($id);
        $this->assign('articles',$articles);
        $categorys=model('Category')->getCategorys();
        $this->assign('categorys',$categorys);
        return $this->fetch();
    }
    public function category()
    {
        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $categorys=model('Category')->get($id);
        $this->assign('categorys',$categorys);

        $category=model('Category')->getCategorys();
        $this->assign('category',$category);

        $articles=Db::table('article')
                    ->where('category_id',$id)
                    ->select();
        
        $this->assign('articles',$articles);
        return $this->fetch();
    }
}
