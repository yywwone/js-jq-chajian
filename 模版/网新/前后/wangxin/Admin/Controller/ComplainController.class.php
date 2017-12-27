<?php
namespace Admin\Controller;
use Think\Controller;
class ComplainController extends BaseController {
    public function comment(){
        $pingjia = M('pingjia');
        $fuwu = M('fuwu');
        $fuwushang = M('fuwushang');
        // if(I('post.name')) $where['name'] =array('like','%'.I('post.name').'%');
        $count = $pingjia->where($where)->count();
        $Page       = new \Think\Page($count,8);
        $show       = $Page->show();// 分页显示输出
        $this->con = $pingjia ->where()
                         ->alias('g')
                         ->limit($Page->firstRow.','.$Page->listRows)
                         ->join('left join fuwu AS o ON g.f_id=o.id')
                         ->join('left join fuwushang AS d ON g.fws_id=d.id')
                         ->field('pj_name,o.name,d.name as fws_name,pj_nr,o.name as f_name')
                         ->select();
                         // echo "<pre>";
                         // var_dump($con);exit;
                         $this->page=$show;
    	$this->display();  
    }
    public function complain(){
        $tousu = M('tousu');
        $user = M('wx_user');
        if(I('post.name')) $where['name_id|neirong'] =array('like','%'.I('post.name').'%');
        $count = $tousu->where($where)->count();
        $Page       = new \Think\Page($count,8);
        $show       = $Page->show();// 分页显示输出
        $this->con = $tousu->alias('g')
	                         ->limit($Page->firstRow.','.$Page->listRows)
	                         ->join('left join wx_user AS o ON g.name_id=o.openid')
	                         ->field('neirong,o.name as u_name')
	                          ->where($where)
	                         ->select();
                         // echo "<pre>";
                         // var_dump($con);exit;
                         $this->page=$show;
    	$this->display();  
    }
    // 用户数据导出
    public function excel(){
        $data = M('wx_user');
        $datas = $data->where()->field('name,add,tel')->select(); 
        // $dataResult = array('1','3','4');
        $headTitle = "微信用户资料"; 
        $title = "微信用户"; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >用户资料</th></tr>"; 
        $titlename = "<tr> 
                   <th  >微信用户名</th> 
                   <th >地址</th> 
                   <th >联系电话</th> 
               </tr>"; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
                
    }
    // 服务商信息导出
    public function excelfuwushang(){
        $data = M('fuwushang');
        $datas = $data->where()->field('name,fuzeren,tel,add')->select(); 
        // $dataResult = array('1','3','4');
        $headTitle = "服务商用户资料"; 
        $title = "服务商信息"; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >用户资料</th></tr>"; 
        $titlename = "<tr> 
                   <th  >服务商名称</th> 
                   <th >负责人</th> 
                   <th >联系电话</th> 
                   <th >地址</th> 
               </tr>"; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
                    
    }

    public function excelData($datas,$titlename,$headtitle,$filename){
         $str = "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\"\r\nxmlns:x=\"urn:schemas-microsoft-com:office:excel\"\r\nxmlns=\"http://www.w3.org/TR/REC-html40\">\r\n<head>\r\n<meta http-equiv=Content-Type content=\"text/html; charset=utf-8\">\r\n</head>\r\n<body>"; 
    $str .="<table border=1><head>".$titlename."</head>"; 
    $str .= $title; 
    foreach ($datas  as $key=> $rt ) 
    { 
        $str .= "<tr>"; 
        foreach ( $rt as $k => $v ) 
        { 
            $str .= "<td>{$v}</td>"; 
        } 
        $str .= "</tr>\n"; 
    } 
    $str .= "</table></body></html>"; 
    header( "Content-Type: application/vnd.ms-excel; name='excel'" ); 
    header( "Content-type: application/octet-stream" ); 
    header( "Content-Disposition: attachment; filename=".$filename ); 
    header( "Cache-Control: must-revalidate, post-check=0, pre-check=0" ); 
    header( "Pragma: no-cache" ); 
    header( "Expires: 0" ); 
    exit( $str ); 
    }
    public function fuwustate(){
        $db = M('dingdan');
        $con = $db->where(array('id'=>I('get.id')))->save(array('zhuangtai'=>'1'));
        if($con){
            $this->redirect('index/widgets');
        }
    }
    public function huodong(){
        $db = M('huodong');
        if($_POST){
        $where['content'] = I('post.content');
        $where['title'] = I('post.tit');
        $this->con = $db->where()->add($where);
        }
        // var_dump(I('post.content'));exit;
        $this->display();
    }
}