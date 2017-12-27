<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller{
    public function __contract(){
        if(!session('type')['id']){
            $this->redirect('index/login');
        }
    }
     public function _empty(){
        $this->redirect('home/index/index');  
    }
}

    // public function _initialize()
    // {
      
    //     if(!session('?admin')) {
    //         $this->redirect('login/login');
    //     }
    // }


    // // 文件上传
    // public function upload($name, $dir)
    // {
    //     $file=request()->file($name);
    //     if($file) {
    //         $info=$file->move('uploads'. DS .$dir);
    //         if($info) {
    //             $path=$dir.DS.$info->getsavename();
    //             return str_replace('\\', '/', $path);
    //         } else {
    //             $this->error($file->geterror()); 
    //         }
    //     } else {
    //         return false;
    //     }
    // }

