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
         $user=array('username'=>$this->params()['username'],'password'=>$this->params()['password'],'login_ip'=>'127.0.0.1');
         $U->userI($user);
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
   public  function verifyCode(){
      if ($_SESSION['code']==$this->params()['verifycode']) {
         echo json_encode('true');
      }else{
         echo 'false';
      }

   }
   public  function verifyLogin(){
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