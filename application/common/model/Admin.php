<?php
namespace app\common\model;
use think\Model;
class Admin extends Model{
	public function getAdmin(){
		$data=[];
		$order=['id'=>'desc'];
		return $this->where($data)
				->order($order)
				->paginate();
	}

	public function add($date){
		$this->save($date);
		return $this->id;
	}

	public function getTeachers(){
		$order=['id'=>'desc','sex'=>'desc'];
		return $this->order($order)
					->select();
	}

	public function getAdminByuserName($username){
		$data=['username'=>$username];
		return $this->where($data)->find();
	}
}