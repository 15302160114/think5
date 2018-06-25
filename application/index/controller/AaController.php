<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class AaController extends Controller
{
    public function index(){
   
        if (!request()->isAjax()){
          
           return ;
        }
        $sid=input('post.sid');
        $hid=input('post.hid');

        $cookiename = 'up'.$sid.$hid.'10000';

        $dataup=['homework_id'=>$hid,'student_id'=>$sid];

       if(cookie($cookiename)==null){
           
            $result=model('Answer')->updateUpNum($dataup);
            if($result!=0){
                 $data=[
                    'info'=>'点赞成功',
                    'status'=>1,
                ];  
                 cookie($cookiename,time()+40, 3600);  
            }else{
                $data=[
                    'info'=>'未交作业不能为其点赞',
                    'status'=>0,
                ];   
            }
         return json_encode($data);
        }
        else
        {
            $data=[
                'info'=>'不要重复点赞',
                'status'=>0,
            ];   
         return json_encode($data);
        
        } 
       
    }
   
}
?>