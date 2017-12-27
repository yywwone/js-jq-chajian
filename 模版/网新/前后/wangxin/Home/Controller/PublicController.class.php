<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function index(){
        if(I("post.video")=="1"){
            $db=M("taobao");
        }else{
           $db=M("remen"); 
        }
        $where['name'] =array('like','%'.I('post.text').'%');
        $con=$db->where($where)->find();
        if($con){

            if(I("post.video")=="1"){
            $this->redirect("index/play",array('type'=>$con['id'],'typ'=>"1"));
                }else{
             $this->redirect("index/play",array('type'=>$con['id'],'typ'=>"2"));
                }

            
        }else{
           $this->redirect("index/index"); 
        }
        $this->display();
    }
   
}