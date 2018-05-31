<?php 
namespace app\common\model;
use think\Model;
class Notice extends Model{
	public function getNotice(){
		$data=[];
		$order=['id'=>'desc'];
		return $this->where($data)
				->order($order)
				->paginate(3);
	}
	public function add($date){
		$this->save($date);
		return $this->id;
	}
}