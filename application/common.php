<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function status($status){
	if($status==1){
		$str="<span class='label label-success radius'>正常</span>";
	}else if($status==0){
		$str="<span class='label label-danger radius'>删除</span>";
	}else{
		$str="<span class='label label-danger radius'>禁用</span>";
	}
	return $str;
}
use think\Db;

function getUsername($id){
    return Db::name('category')->where('id',$id)->find()['categoryname'];
}
function getAuthorname($id){
    return Db::name('author')->where('id',$id)->find()['username'];
}
function getAuthornote($id){
    return Db::name('author')->where('id',$id)->find()['note'];
}
function getAuthorlogo($id){
    return Db::name('author')->where('id',$id)->find()['logo'];
}