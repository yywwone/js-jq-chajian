<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController{
    
    public function index()
    // 分页
    {
        $count      = M('fuwu')->where($where)->count();
        $fuwus['biaoshi'] = 1;
        $counts     = M('fuwushang')->where($fuwus)->count();
        $Page       = new \Think\Page($count,6);
        $Pages      = new \Think\Page($counts,3);
        $show       = $Page->show();
        $show       = $Pages->show();
        $pagintor   = M('fuwu')->where()
                               ->limit($Page->firstRow.','.$Page->listRows)
                               ->order('id asc')
                               ->select();
        $pagintor1  = M('fuwushang')
                             ->where($fuwus)
                             ->limit($Pages->firstRow.','.$Pages->listRows)
                             ->order('id asc')
                             ->select();
        $xinxi      = M('wzxx')->where()->find();
        $this->yuanqu = M('users')->field('id,yuan')->select();
        // 活动
        $db = M('huodong');
        $this->con = $db->where($where)->field('title,id')->select();

        $this->assign('page', $page);
        $this->assign('pages', $pages);
        $this->assign('xinxi', $xinxi);
        $this->assign('pagintor', $pagintor);
        $this->assign('pagintor1', $pagintor1);
        $this->display();
    }
    public function aboutc()
    { 
        $id          = I('get.id');
        $where['id'] = $id;
        $item        = M('fuwushang')->where($where)->find();
        $this->assign('item', $item);
        $this->display();
    }

    public function alter()
    { 
        $item=M('wx_user')->where('openid',session('user')['openid'])->find();
        $this->assign('item', $item);
        if ($_POST) {
            $data     =$_POST;
            $id['id'] = I('get.id');
            $up       = M('wx_user')->where($id)->save($data);
            if($up) {
                $this->redirect("index/personal",array('alert'=>'1'));
            // $this->success('修改成功','index/personal');
            } else {
                $this->redirect("index/personal",array('alert'=>'2'));
            // $this->error('修改失败','index/personal');
            }
        }
            $this->display();
    }
    public function upuser()
    { 
        // $con修改
        $id['id'] = I('get.id');
        if ($_POST) {
            $data = $_POST;
            $con  = M('wx_user')->where($id)->save($data);
            $this->redirect('index/personal');
        }
            $this->assign('id', $id);
            $this->display();
    }
    public function cdzs()
    { 
         $this->display();
    }
    public function logout()
    { 
        session('user', null);
        session('[destroy]'); 
        $this->redirect('index/index');
    }
    public function csfw()
    { 
         $this->display();
    }
    public function enter()
    { 
        if ($_POST) {
            $data = $_POST;
            $qiye = M('qy_luru')->add($data);
            if ($qiye) {
                $this->redirect("index/index",array('alert'=>'1'));
                // $this->success('提交成功');
            }else{
                $this->redirect("index/index",array('alert'=>'2'));
                // $this->error('提交失败');
            }
        }
            $this->display();
    }
    public function evaluate()
    { 
        $id['id'] = I('get.id');
        $user['id'] = $user['fws_id'];
        if ($_POST) {
            $user            = M('dingdan')->where($id)->find();
            $data['pj_nr']   = $_POST['pingjia'];
            $data['pj_name'] = $user['name'];
            $data['f_id']    = $user['fw_id'];
            $data['fws_id']  = $user['fws_id'];
            $upd=M('pingjia')->add($data);
            $data1['zhuangtai'] =3;
            $upd1=M('dingdan')->where($id)->save($data1);
            $fws=M('fuwushang')->where($user)->find();
            $data2['fw_pj']    =($fws['fw_pj']+$_POST['xing'])/2;
            $upd2=M('fuwushang')->where($user)->save($data2);
            if ($upd) {
                    $this->redirect("index/oder",array('alert'=>'1'));
                    // $this->success('评价成功','index/oder');
                }else{
                     $this->redirect("index/evaluate",array('alert'=>'2'));

                    // $this->error('未知错误');
                }
            }
           $item =  M('dingdan')->where($id)->find();
           $this->assign('item', $item);
           $this->display();
    }
    public function fwpj()
    { 
        if ($_POST) {
            $data['neirong'] = $_POST['neirong'];
            $data['name_id'] = session('user')['openid'];
            $upd = M('tousu')->add($data);
            if ($upd) {
                $this->redirect("index/personal",array('alert'=>'1'));
                // $this->success('提交成功','index/');
            }else{
                $this->redirect("index/fwpj",array('alert'=>'2'));
                // $this->error('未知错误');
            }
        }
         $this->display();
    }
    public function gslb()
    { 
        $pagintor = M('fuwushang')->where(array('biaoshi'=>'1'))->select();
        $this->assign('pagintor', $pagintor);
        $this->display();
    }
    public function gyslb()
    { 
        $id               = I('get.id');
        $where['biaoshi'] = 2;
        $pagintor         = M('fuwushang')->where($where)->select();
        $this->assign('pagintor', $pagintor);
        $this->assign('id', $id);
        $this->display();
    }
    public function login()
    { 
         $this->display();
    }
    public function xiadan()
    { 
       if (session('user')) {
            $fws_id['id']       = I('fws_id');
            $fw_id['id']        = I('fw_id');
            $openid['openid']   = session('user')['openid'];
            $fws                = M('fuwushang')->where($fws_id)->find();
            $fw                 = M('fuwu')->where($fw_id)->find();
            $user               = M('wx_user')->where($openid)->find();
            $data['name_id']    = session('user')['openid'];
            $data['fw_id']      = $fw_id;
            $data['fws_name']   = $fws['name'];
            $data['fws_id']     = $fws_id;
            $data['zhuangtai']  = 0;
            $dd = M('dingdan')->where($data)->find();
            if ($dd) {
                // $this->success('请勿重复下单');
                $this->redirect('index/xiadan');
            }
            $data['fw_name']   = $fw['name'];
            $data['name']      = $user['z_name'];
            $data['tel']       = $user['tel'];
            $data['add']       = $user['add'];
            $data['fws_tel']   = $fws['tel'];
            $data['create_time'] = date("Y-m-d h:i:s");
            $ding = M('dingdan')->add($data);
            if ($ding) {
                $this->redirect("index/xiadan",array('alert'=>'1'));
                    // $this->success('下单成功');
                }else{
                 $this->redirect("index/xiadan",array('alert'=>'2'));
                    // $this->error('下单失败');
                }   
        }else{
            $this->redirect("gslb/gslb",array('alert'=>'3'));
            // $this->error('请先登录','gslb/gslb');
        }
    }
    public function oder()
    { 
        $pagintors['name_id'] = session('user')['openid'];
        $pagintors1['name_id'] = session('user')['openid'];
        $pagintors2['name_id'] = session('user')['openid'];
        $pagintors1['zhuangtai'] = 1;
        $pagintors2['zhuangtai'] = 2;
        $pagintor  = M('dingdan')->where($pagintors)->select();
        $this->assign('pagintor', $pagintor);
        $pagintor1 = M('dingdan')->where($pagintors1)->select();
        $this->assign('pagintor1', $pagintor1);
        $pagintor2 = M('dingdan')->where($pagintors2)->select();
        $this->assign('pagintor2', $pagintor2);
        $this->display();
    }
    public function queren()
    { 
        $id['id']           = I('get.id');
        $data['zhuangtai']  = 2;
        $data['over_time']  = date("Y-m-d h:i:s");
        $upd = M('dingdan')->where($id)->save($data);
        if ($upd) {
             $this->redirect('index/oder');
           
         }else{
             // $this->error('未知错误');  
             $this->redirect('index/queren');
         }
    }

    public function personal()
    { 
        $openid['openid'] = session('user')['openid'];
        $item = M('wx_user')->where($openid)->find();
        $this->assign('item', $item);
        $this->display();
    }
    public function qbfl()
    { 
            // $count       = M('fuwu')->where($where)->count();
            // $Page        = new \Think\Page($count,8);
            // $show        = $Page->show();
            $fid['f_id'] = '0';
            $pagintor    = M('fuwu')->where($fid)->select();
        $this->assign('pagintor', $pagintor);
        // $this->assign('page', $page);
        $this->display();
    }
    public function qyfw()
    { 
        $id['id']     = I('get.id');
        $f_id['f_id'] = I('get.id');
        $fu       = M('fuwu')->where($id)->find();
        if($fu['name']=="企业服务"){
        $pagintor = M('fuwu')->where($f_id)->field('id,name,f_id,img')->select();
        // echo "<pre>";
        // var_dump($pagintor);die();
        $this->assign('pagintor', $pagintor);
        }else{
        $pagintor = M('fuwu')->where($f_id)->field('id')->find();
        $sele     = M('fuwu')->where(array('f_id'=>$pagintor['id']))->field('name,id,f_id,img')->select();
        $this->assign('pagintor', $sele);
        }
        
        // echo "<pre>";
        // var_dump($sele);exit;
        // var_dump($fu);die();
        // 企业服务存在
        // if ($pagintor['1']) {
        //    // $this->redirect('index/qyfw2',array("id"=>$pagintor['0']['id']);
        //     $this->redirect('index/qyfw2',array('id'=>$pagintor['0']['id']));
        // }
        // $this->assign('pagintor', $sele);
        $this->assign('fu', $fu);
        $this->display();
    }
    public function qyfw2()
    { 
        $id['f_id'] = I('get.id');
        $fu       = M('fuwu')->where($id)->find();
        $pagintor = M('fuwu')->where($id)->select();
        $this->assign('pagintor', $pagintor);
        $this->assign('fu', $fu);
        $this->display();
    }
    public function rczy()
    { 
         $this->display();
    }
    public function sign()
    { 
         $this->display();
    }
    public function wyfw()
    { 
         $this->display();
    }
    public function xqym()
    { 
        $f_id['f_id']   = I('get.id');
        $id['id']     = I('get.id');
        $fu             = M('fuwu')->where($id)->find();
        $pagintor       = M('pingjia')->where($f_id)->select();

        $id               = I('get.id');
        $where['biaoshi'] = 2;
        $pagintor         = M('fuwushang')->where($where)->select();
        $this->assign('pagintor', $pagintor);
        $this->assign('id', $id);
        // var_dump($fu);exit;
        $this->assign('pagintor', $pagintor);
        $this->assign('fu', $fu);
        $this->display();
    }
    public function yqfc()
    { 
         $this->display();
    }
    public function zsyz()
    { 
        $xinxi=M('wzxx')->where(array('id'=>1))->find();
        $this->assign('xinxi', $xinxi);
        $this->display();
    }
    public function activity(){
        $db = M('huodong');
        $where['id'] = I('get.id');
        $this->con = $db->where($where)->find();
        $this->display();
    }
   
   

}
