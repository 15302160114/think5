<?php
namespace app\index\controller;
use think\Controller;

class IndexController extends Controller
{
    public function index()
    {
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
        return $this->fetch();
    }
}
