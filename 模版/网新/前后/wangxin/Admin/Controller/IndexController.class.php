<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController{
    // public function _empty(){
    //     $this->redirect('index/index');
    // }
    public function aboutc(){
        $db = M('fuwushang');
        $where['id'] = I('get.id');
        $this->con = $db->where($where)->select();
        $this->display();
    }
    public function index(){
        $dingdan   = M('dingdan');
        $users     = M('wx_user');
        $fuwushang = M('fuwushang');
        if(!session('type')['id']){
            $this->redirect('index/login');
        }
        // $where['yuan']=session('type')['id'];
            $this->dingdan    = $dingdan->where($where)->count();
            $this->users      = $users->where($where)->count();
            $this->fuwushang  = $fuwushang->where($where)->count();
            $this->con        = $dingdan->where($where)->order('id desc')->limit('0,8')->select();
        	$this->display();  
    }



    // 园区账号管理
    public function accout(){
        $db=M('users');
        // 添加账号
          if(I('get.state')=='2'){
          $wheres['yuan']   = I('post.yuan');
          $wheres['name']   = I('post.name');
          $wheres['s_name'] = I('post.s_name');
          // $wheres['y_id']=session('type')['id'];
          $wheres['pwds']   = trim(md5(I('post.pwds')));
            $con = $db->add($wheres);
          if($con){
            $this->redirect('index/accout');
          }
          }
        if(I('post.name')) $where['yuan'] = array('like','%'.I('post.name').'%');
            $count = $db->where($where)->count();
            $Page       = new \Think\Page($count,8);
            $show       = $Page->show();
            $list       = $db->where($where)
                             ->limit($Page->firstRow.','.$Page->listRows)
                             ->order('id desc')
                             ->select();
        $this->con   = $list;
        $this->count = $count;
        $this->page  = $show;
        $this->display();  
    }
    // ajax判断
    public function ajaxacc(){
        $db = M('users');
     if(I('post.name')){ 
        $where['name'] = I('post.name');
        $con = $db->where($where)->find();
        if($con){
            $status    = 1;
        }
         }
        if(I('post.yuan')){ 
        $where['yuan'] = I('post.yuan');
        $con = $db->where($where)->find();
        if($con){
            $status = 1;
        }
         }
        $this->ajaxReturn($status);
    }
    // 账号操作
     public function yuans(){
         $db = M('users');
         if(I('get.id')){
            // 停用
            if(I('get.type') == '1'){
                $c = $db->where(array('id'=>I('get.id')))->field('status')->find();
                if($c['status'] == '1'){
                    $where['status'] = '2';
                }else{
                    $where['status'] = '1';
                }
                $con = $db->where(array('id'=>I('get.id')))->save($where);
                if($con){
                    $this->redirect('index/accout',array('aler'=>'2'));
                }else{
                    $this->redirect('index/accout',array('aler'=>'3'));
                }
            }
            // 删除
            if(I('get.type') == '2'){
                    $con = $db->where(array('id'=>I('get.id')))->delete();
                    if($con){
                        $this->redirect('index/accout',array('aler'=>'4'));
                    }else{
                        $this->redirect('index/accout',array('aler'=>'5'));
                    }
            }
        }else{
            $this->redirect('index/accout',array('aler'=>'1'));
        }
    }
    // 服务管理
    public function grid(){
    	 $db = M('fuwu');
            if(I('post.name')) $where['name'] = array('like','%'.I('post.name').'%');
            $where['f_id'] = array('neq',0);
            
            // 父id
            $con        = $db->distinct(true)->field('f_id')->select();
            $where      = array();
            foreach ($con as $key => $v) {
                
                foreach ($v as $key => $va) {
                    if($va!=0){
                        array_push($where,$va);
                    }  
                }
            }
            $aaa = implode($where, ',');
            $name['id']  = array('in',$where);
            $c           = $db->where($name)->field('name,id')->select();
            // var_dump($where);exit;
            $w           = array();
            $s           = array();
            foreach ($c as $key => $v) {
                array_push($w,$v['name']);
                array_push($s,$v['id']);
            }
            $array_ab       = array_combine($s,$w);
            
            $where['id'] = array('not in',$aaa);
            $where['f_id'] = array('not in','0');

            $condition['_logic'] = 'OR';
            $count      = $db->where($where)->count();
            $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show       = $Page->show();// 分页显示输出
            $list       = $db ->limit($Page->firstRow.','.$Page->listRows)
                            ->order('id desc')
                            ->where($where)
                            ->select();
                            // echo "<pre>";
            // var_dump($list);exit;
            $this->array_ab = $array_ab;
            $this->count    = $count;
            $this->fuwu     = $list;
            $this->page     = $show;
            $this->display();
    }

    // 服务添加页
    public function fuwu(){
        $db    = M('fuwu');
        $map['f_id'] = 0;
        // ->distinct(true)
        $con       = $db->where()->field('f_id')->distinct(true)->select();
        $quchong   = $db->field('id')->where($map)->distinct(true)->select();
        // $con=array_reduce($con,'f_id');
        $where  = array();
        $wheres = array();
        foreach ($con as $key => $v) {
            
            foreach ($v as $key => $va) {
                if($va!=0){
                    array_push($where,$va);
                }  
            }
        }
        foreach ($quchong as $key => $v) {
            foreach ($v as $key => $va) {
                
                    array_push($wheres,$va);
              
            }
        }
        $result=array_diff($where,$wheres);
        // echo "<pre>";
        // var_dump($where);exit;
        $name['id']  = array('in',$result);
        $c           = $db->where($name)->field('name,id')->select();
        // 剔除fid=0的id
        // echo "<pre>";
        // var_dump($wheres);exit;
        $this->fname = $c;
        // 查看
        $co          = $db->where(array('id'=>I('get.id')))->find();
        $arr         = array_search(I('get.id'), $result);
        if($arr){
            $this->coone = $co;
        }else{
            $this->cotwo = $co;
        }
        $this->display();
        // $db=M('fuwu');
        // $con=$db->Distinct(true)->field('f_id')->select();
        // // $fids = array_column($con,'name');
        // // $fw = $db->Distinct(true)->where($where)->select();
        // // $bb=array_unique($con);
        // foreach ($con as $key => $value) {
        //     $key='id';
        // }
        // $c=$db->where($con)->select();
        // echo "<pre>";
        // var_dump($con);exit;
        // // $con=$db->join("fuwu a on fuwu.id=a.f_id")->select();
    
        // $this->display();
    } 
    public function fuwus(){
        $this->display();
    }
    // 服务操作功能方法
    public function addsfuwu(){
     if(I('get.state') == 3){
        $minute        = M('fuwu');
        $where['id']   = I('get.id');
        $dele          = $minute->where($where)->find();
        unlink("./PUBLIC/admin/uploads/images/".$dele['img']."");
        unlink("./PUBLIC/admin/uploads/images/".$deele['image']."");
        $con = $minute->where($where)->delete();
        $this->redirect('index/grid');
           //信息上传
     }
        if(IS_POST){
            $minute          = M('fuwu');
            $where['name']   = I('post.name');
            $where['fw_js']  = I('post.explain');
            $where['fw_lc']  = I('post.fw_lc');
            I('post.f_id')?$where['f_id']=intval(I('post.f_id')):$where['f_id']=0;

            // $wher['uid']=$co['id'];
            //图片上传
            // var_dump($where);EXIT;
            if(!I('post.id')){
                if(!$_FILES['img']) $this->error("logo图片未上传");
                if(!$_FILES['image']) $this->error("展示图片未上传");
                 }
          if($_FILES['img']['name']||$_FILES['image']['name']){
           if($_FILES){       
                $type = "admin/uploads";
                $path = "../Public/".$type."/";
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     53145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','tmp');// 设置附件上传类型
                $upload->rootPath  =     './Public/'; // 设置附件上传根目录
                $upload->savePath  =     $type."/"; // 设置附件上传（子）目录
                $upload->subName   =     array('date','Ymd');
                          //缩略图
                   $upload->uploadReplace     = true; //是否存在同名文件是否覆盖  
                   $upload->autoSub           = true; //是否使用子目录保存图片  
                   $upload->thumbRemoveOrigin = false; //上传图片后删除原图片 
                          // 上传文件
                   $info   =   $upload->upload();
                   $time   =   date("Ymd", time());
                  //     echo "<pre>";
                  // var_dump($info);exit;
                        // img
                        if(isset($_FILES['img']) && $_FILES['img']['error'] < 1){
                            $pic = '/Public/'.$info['img']['savepath'].$info['img']['savename'];

                            $image = new \Think\Image(); 
                            $image->open(".".$pic."");
                            $image->thumb(75, 75)->save(".".$pic.""); 
                            $w     = $time."/".$info['img']['savename'];
                            $where['img'] = $w;
                             }
                        if(isset($_FILES['image']) && $_FILES['image']['error'] < 1){
                            $pics   = '/Public/'.$info['image']['savepath'].$info['image']['savename'];
                            $images = new \Think\Image(); 
                            $images->open(".".$pics."");
                            $images->thumb(450, 230)->save(".".$pics."");  
                            $ws     = $time."/".$info['image']['savename'];
                            $where['image']=$ws;
                        }
                 }
             }
                 if(!I('post.id')){
                    $where['create_time'] = date('Y-m-d H:i:s',time());
                    // var_dump($where);exit;
                    $cc  = $minute->add($where);
                        if(I('get.state')=='1'){
                            $where['f_id'] = $cc;
                            $where['fw_js'] = "一级服务（此处不用添加内容）";
                            $where['fw_lc'] = "一级服务（此处不用添加内容）";
                            $ccc  = $minute->add($where);
                            if($ccc){
                            $where['f_id'] = $ccc;
                            $where['fw_js'] = "二级服务，请前往修改";
                            $where['fw_lc'] = "二级服务，请前往修改";
                            $cccc = $minute->add($where);
                            }
                            
                        }
                    }else{
                     $un = $minute->where(array('id'=>I('post.id')))->select();
                     $cc = $minute->where(array('id'=>I('post.id')))->save($where); 
                }
                
                 if(!$cc){
                        $this->error("未修改成功");
                     }else{
                        $this->redirect('index/grid');
                     }      
       }
   }
    
    // 用户管理
    public function tables(){
    	$db  =  M('wx_user');
         // $wheres['y_id']=session('type')['id'];
    	if(I('post.name')) $where['name|tel'] =array('like','%'.I('post.name').'%');
    	$count = $db->where($where)->count();
            $Page       = new \Think\Page($count,8);
            $show       = $Page->show();
            $list       = $db->where($where)
                     ->limit($Page->firstRow.','.$Page->listRows)
                     ->order('id desc')
                     ->select();
    	$this->user  = $list;
    	$this->count = $count;
        $this->page  = $show;
    	$this->display();  
    }
    public function users(){
         $db = M('wx_user');
        if(I('get.id')){
            // 停用
            if(I('get.type')=='1'){
                $c=$db->where(array('id'=>I('get.id')))->field('state')->find();
                if($c['state']=='1'){
                    $where['state'] = '2';
                }else{
                    $where['state'] = '1';
                }
                $con = $db->where(array('id'=>I('get.id')))->save($where);
                if($con){
                    $this->redirect('index/tables',array('aler'=>'2'));
                }else{
                    $this->redirect('index/tables',array('aler'=>'3'));
                }
            }
            // 删除
            if(I('get.type') == '2'){
                    $con = $db->where(array('id'=>I('get.id')))->delete();
                    if($con){
                        $this->redirect('index/tables',array('aler'=>'4'));
                    }else{
                        $this->redirect('index/tables',array('aler'=>'5'));
                    }
            }
        }else{
            $this->redirect('index/tables',array('aler'=>'1'));
        }
    }
    // 服务商管理
    public function facilitator(){
         $db = M('fuwushang');
            if(I('post.name')) $where['name|fuzeren'] = array('like','%'.I('post.name').'%');
            $count      = $db->where($where)->count();
            $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show       = $Page->show();// 分页显示输出
            $list       = $db ->limit($Page->firstRow.','.$Page->listRows)
                              ->order('id asc')
                              ->where($where)
                              ->select();
            // 父id
            // $con=$db->distinct(true)->field('f_id')->select();
            // $where=array();
            // foreach ($con as $key => $v) {
                
            //     foreach ($v as $key => $va) {
            //         if($va!=0){
            //             array_push($where,$va);
            //         }  
            //     }
            // }
            // $name['id']  = array('in',$where);
            // $c=$db->where($name)->field('name,id')->select();
            // $w=array();
            // $s=array();
            // foreach ($c as $key => $v) {
            //     array_push($w,$v['name']);
            //     array_push($s,$v['id']);
            // }
            $array_ab       = array_combine($s,$w);
            $this->array_ab = $array_ab;
            $this->count    = $count;
            $this->fuwu     = $list;
            $this->page     = $show;
            $this->display();
    }
    // 服务选择
    public function fw_xz(){
        $fw        = M('fuwu');
        $fws       = M('fuwushang');
        $id['id']  = I('post.id')?I('post.id'):I('get.id');
        $fuwushang = $fws->where($id)->find();
        $arrs      = explode(",", $fuwushang['fu_id']);
        if($_POST){
            $date['fu_id'] = implode(',', I('post.iid'));
            $up            = $fws->where($id)->save($date);
            if($up){
                $this->redirect('index/fw_xz',array('id'=>I('post.id')));
            }
        }
       $con = $fw->distinct(true)->field('f_id')->select();
            $where=array();
            foreach ($con as $key => $v) {
                
                foreach ($v as $key => $va) {
                    if($va!=0){
                        array_push($where,$va);
                    }  
                }
            }
            $fuwu           = $fw->where($f_id)->field('id,name,f_id')->select();
            $name['id']     = array('in',$where);
            $name['f_id']   = array('neq',0);
            $c = $fw->where($name)->field('name,id')->select();

        $this->fw_ls  = $c;
        $this ->fuwu  = $fuwu;
         $this->assign('arrs', $arrs);
        $this ->fnum  = $where;
        // var_dump($con);
        $this->display();
    }
    public function upfacilitator(){
        $minute = M('fuwushang');
        // 信息删除
        if(I('get.state')==2){
        $where['id']=I('get.id');
        $dele=$minute->where($where)->find();
        // var_dump($dele['img']);exit;
        unlink("./PUBLIC/admin/uploads/images/".$dele['img']."");
        // unlink("./PUBLIC/admin/uploads/images/".$dele['image']."");
        $con=$minute->where($where)->delete();
        $this->redirect('index/facilitator');
           //信息上传
     }
        if(I('get.id')){
            $this->cotwo=$minute->where(array('id'=>I('get.id')))->find();
        }
        
        if(IS_POST){
            $where['name']       = I('post.name');
            $where['fuzeren']    = I('post.fuzeren');
            $where['jianjie']    = I('post.jianjie');
            $where['tel']        = I('post.tel');
            $where['xiangqing']  = I('post.xiangqing');
            $where['add']        = I('post.add');
            $where['qy_rongyu']  = I('post.rongyu');
            $where['biaoshi']    = I('post.biaoshi');
            // $where['range']    = I('post.range');
            // echo "<pre>";
            // var_dump($where);exit;
            // $wher['uid']=$co['id'];
            //图片上传
            if(!I('post.id')){
                if(!$_FILES['img']) $this->error("logo图片未上传");
                // if(!$_FILES['image']) $this->error("展示图片未上传");
                 }
          if($_FILES['img']['name']){
           if($_FILES){       
                $type   = "admin/uploads";
                $path   = "../Public/".$type."/";
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','tmp');// 设置附件上传类型
                $upload->rootPath  =     './Public/'; // 设置附件上传根目录
                $upload->savePath  =     $type."/"; // 设置附件上传（子）目录
                $upload->subName   =     array('date','Ymd');
                          //缩略图
                   $upload->uploadReplace     = true; //是否存在同名文件是否覆盖  
                   $upload->autoSub           = true; //是否使用子目录保存图片  
                   $upload->thumbRemoveOrigin = false; //上传图片后删除原图片 
                          // 上传文件
                   $info   =   $upload->upload();
                   $time   = date("Ymd", time());
                      
                        // img
                        if($info){
                            $pic   = '/Public/'.$info['img']['savepath'].$info['img']['savename'];
                            $image = new \Think\Image(); 
                            $image->open(".".$pic."");
                            $image->thumb(1000, 1000)->save(".".$pic.""); 
                            $w     = $time."/".$info['img']['savename'];
                            $where['img'] = $w;
                             }
                        // if(isset($_FILES['image']) && $_FILES['image']['error'] < 1){
                        //     $pics    = '/Public/'.$info['image']['savepath'].$info['image']['savename'];
                        //     $images  = new \Think\Image(); 
                        //     $images->open(".".$pics."");
                        //     $images->thumb(142, 142)->save(".".$pics."");  
                        //     $ws      = $time."/".$info['image']['savename'];
                        //     $where['image'] = $ws;
                             
                        // }
                 }
             }
                 
                 if(!I('post.id')){
                    $cc  = $minute->add($where);  
                }else{
                     $un = $minute->where(array('id'=>I('post.id')))->find();
                     $cc = $minute->where(array('id'=>I('post.id')))->save($where);    
                }
                 if(!$cc){
                        $this->error("未修改成功");
                     }else{
                        $this->redirect('index/facilitator');
                     }      
        
       }
       $this->display();
    }
    // 订单管理
    public function widgets(){
        $db = M('dingdan');
         // $wheres['y_id']=session('type')['id'];
        switch (I('post.name')) {
            case '已评价':
                $zhuangtai = '3';
                break;
            case '已完成':
                $zhuangtai = '2';
                break;
            case '进行中':
                $zhuangtai = '1';
                break;
            case '已下单':
                $zhuangtai = '0';
                break;
        }
        // var_dump($zhuangtai);exit;
        if(I('post.name')){
            $where['name|fw_name|fws_name'] = array('like','%'.I('post.name').'%');
            $where['_logic']     = 'or';
            $where['zhuangtai']  = $zhuangtai;
        } 
            $count      = $db->where($where)->count();
            $Page       = new \Think\Page($count,8);
            $show       = $Page->show();
            $con        = $db->where($where)
                     ->limit($Page->firstRow.','.$Page->listRows)
                     ->order('id asc')
                     ->select();
        $this->count = $count;
        $this->con   = $con;
        $this->page  = $show;
        $this->display();  
    }
    public function orders(){

    }
    // 用户登录
        public function login(){
            $db = M('users');
            if($_POST){
            $where['name'] = I('post.name');
            $where['pwds'] = trim(md5(I('post.pwd')));
            $con = $db->where($where)->select();
            if($con){
                // var_dump($con['0']['type']);exit;
                if($con['0']['status'] == '2'){
                    session('type',array('quan'=>$con['0']['type'],'id'=>$con['0']['id'],'name'=>$con['0']['yuan']));
                    // var_dump(session('type')['quan']);exit;
                }
                // 生成权限session
                // session('type'array('name'=>$con['name']))
                $this->redirect('index/index');
            }else{
                $this->redirect('index/login');
            }
             }
            // var_dump($_POST);exit;
        $this->display();  
    }
    // 企业录入
    public function qylr(){
         $db = M('qy_luru');
         if(I('post.name')){
            $where['gs_name'] = array('like','%'.I('post.name').'%');
        } 
            $count      = $db->where($where)->count();
            $Page       = new \Think\Page($count,8);
            $show       = $Page->show();
            $con        = $db->where($where)
                     ->limit($Page->firstRow.','.$Page->listRows)
                     ->order('id asc')
                     ->select();
        $this->count = $count;
        $this->con   = $con;
        $this->page  = $show;
        $this->display();  
    }
    // 用户登出
    public function uplogin(){
        session('type',null);
        $this->redirect('index/login');
    }

}