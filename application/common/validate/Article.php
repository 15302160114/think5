<?php
namespace app\common\validate;
use think\Validate;
class Article extends Validate{
	protected $rule=[
		'title'=>'require|max:15'
	];
	protected $scene=[
		'add'=>['title'],
		'edit'=>['id','title'],
	];
}