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
