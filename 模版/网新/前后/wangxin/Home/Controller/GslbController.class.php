<?php
namespace Home\Controller;
use Think\Controller;
class GslbController extends BaseController{
    public function gslb()
    {
    $APPID='wxe9c43ae482bbfd0e';
    $scope='snsapi_userinfo';
    $REDIRECT_URI = urlencode('http://www.buy297.com/Home/gslb/oauth');
   $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$APPID.'&redirect_uri='.$REDIRECT_URI.'&response_type=code&scope='.$scope.'&state=STATE#wechat_redirect';
       header("Location:".$url);exit;
    }
     public function oauth()
    { 

            $appid = "wxe9c43ae482bbfd0e";  
            $secret = "dc86ebadfeb1c37c61004b1dcae66e46";  
            $code = $_GET["code"];

            //碌脷脪禄虏陆:脠隆脠芦戮脰access_token
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$secret";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            $token = json_decode($output, true);

        //碌脷露镁虏陆:脠隆碌脙openid
            $oauth2Url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $oauth2Url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            $oauth2 = json_decode($output, true);
            //碌脷脠媒虏陆:赂霉戮脻脠芦戮脰access_token潞脥openid虏茅脩炉脫脙禄搂脨脜脧垄
        $access_token = $token["access_token"];
            $openid = $oauth2['openid'];  
             $get_user_info_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $get_user_info_url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            $userinfo = json_decode($output, true);
            print_r($userinfo);
            session('user', $userinfo);
            $where['openid'] = $userinfo['openid'];
            $users = M('wx_user')->where($where)->find();
                if(empty($users)){
                    $data['name']=$userinfo['nickname'];
                    $data['openid']=$userinfo['openid'];
                    $data['sex']=$userinfo['sex'];
                    $data['img']=$userinfo['headimgurl'];
                    $a=M('wx_user')->add($data);
                    if($a){
                         $this->redirect('index/personal',array("id"=>$a));
                     }else{
                          $this->redirect('index/index',array("id"=>$a));
                     }
                }
    }
    

}
