<?php
namespace Admin\Controller;
use Think\Controller;
class EmptyController extends BaseController {
    public function _empty(){
    	$this->redirect('admin/index/index');  
    }
}