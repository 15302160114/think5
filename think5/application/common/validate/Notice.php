<?php
namespace app\common\validate;
use think\Validate;
class Notice extends Validate{
	protected $rule=[
		'id'=>'require|max:15'
	];
	protected $scene=[
		'add'=>['id'],
		'edit'=>['id','title'],
	];
}