<?php
namespace ShiYuan\Controller;
use Core\Libs\BaseController;
use Core\Libs\VerifyCode;
use ShiYuan\Model\UserModel;

class MemberController extends BaseController
{

   private $logined=false;
   private function verifyUser()
   {
      if (isset($_SESSION['username'])){
         $this->logined=true;
      }
   }
   public function index()
   {
      $Title="十元小店";
      $this->assign('Title',$Title);
      $this->display('member.html');
   }
   public function login()
   {
      $Title="十元小店商品列表";
      $this->assign('Title',$Title);
      $this->assign('token',SetToken());
      $this->display('login.html');
   }
   public function register()
   {
      if($_SERVER['REQUEST_METHOD']=='GET'){
         $Title="十元小店商品列表";
         $this->assign('Title',$Title);
         $this->assign('token',SetToken());
         $this->display('register.html');
      }else{
         $U=new UserModel();
         $user=array('username'=>$this->params()['username'],'telephone'=>$this->params()['telephone'],'password'=>$this->params()['password'],'login_ip'=>'127.0.0.1');
         $code=$U->userI($user);
         if($code==0){
            header("refresh:5;url=http://localhost/member/login");
            echo '注册成功<br>'.'请登陆五秒后自动转跳';
         }else{
            header("refresh:5;url=http://localhost/member/register");
            echo '注册失败<br>'.'请重新注册五秒后自动转跳';
         }
      }

   }
   public function accountLevel()
   {
      $Title="十元小店商品列表";
      $this->assign('Title',$Title);
      $this->display('accountlevel.html');
   }
   public function code(){
      $v=VerifyCode::getInstance();
      $v->imgEn(4);
      $_SESSION['code']=$v->getCode();
   }
   public  function verify(){
      $json_arr=array('code'=>'0','err'=>'验证通过');
      $U=new UserModel();
      if (!(isset($this->params()['verifycode'])&&isset($_SESSION['code'])&&$_SESSION['code']==$this->params()['verifycode'])) {
         $json_arr=array('code'=>'1','err'=>'验证码错误');
         echo json_encode($json_arr);
         return;
      }

      if (isset($this->params()['username'])){
         $user=array(':username'=>$this->params()['username'],':telephone'=>$this->params()['telephone']);
         $rst=$U->checkQ($user);
         if ($rst){
            if ($rst['telephone']!=''){
               $json_arr=array('code'=>'2','err'=>'电话已经存在');
               echo json_encode($json_arr);
               return;
            }
            if ($rst['username']!=''){
               $json_arr=array('code'=>'3','err'=>'用户名已经存在');
               echo json_encode($json_arr);
               return;
            }
         }
      }
      echo json_encode($json_arr);
      return;
   }
   public function verifyLogin(){
      if ($this->params()['token']!=$_SESSION['token']){
         echo "请勿重复提交";
      }else{
         SetToken();
         $user=array(':username'=>$this->params()['username'],':password'=>$this->params()['password']);
         $U=new UserModel();
         $rst=$U->userQ($user);
         if($rst){
            $_SESSION['username']=$rst['username'];
            header("Location: http://localhost/member");
         }else{
            header("refresh:5;url=http://localhost/member/login");
	        echo '登陆信息不正确<br>'.'请重新登陆五秒后自动转跳';
         }
      }
   }
}