<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
    public function __contract(){
    	if(!session('type')['id']){
    		$this->redirect('Admin-Index/login');
    	}
    }
     public function _empty(){
    	$this->redirect('Admin/Index/index');  
    }
}