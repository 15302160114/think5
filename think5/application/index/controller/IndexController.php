<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class IndexController extends Controller
{
    public function index()
    {
      return $this->fetch();
    }
}
