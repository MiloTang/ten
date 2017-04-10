<?php
namespace ShiYuan\Controller;
use Core\Libs\BaseController;
use Core\Libs\VerifyCode;
use ShiYuan\Model\UserModel;

class MemberController extends BaseController
{

   private $login=false;
   private $_user;
   public function __construct()
   {
      $this->_user =new UserModel();
      if (isset($_SESSION['info'])){
         $this->login=true;
      }
   }

   public function index()
   {
      if ($this->login){
         $Title="十元小店";
         $this->assign('Title',$Title);
         $this->display('member.html');
      }else{
         $this->login();
      }

   }
   public function login()
   {
      if ($this->login){
         $this->index();
      }else{
         if($_SERVER['REQUEST_METHOD']=='GET') {
            $Title="十元小店商品列表";
            $this->assign('Title',$Title);
            $this->assign('token',SetToken());
            $this->display('login.html');
         }else{
            if ($this->params()['token']!=$_SESSION['token']){
               echo "请勿重复提交";
            }else{
               SetToken();
               $username=$this->params()['username'];
               $password=$this->params()['password'];
               if(preg_match('/^[a-zA-z]\w{5,15}$/',$password)&&preg_match('/^[a-zA-z]\w{5,15}$/',$username)){
                  $pass=true;
               }else{
                  $pass=false;
               }
               if ($pass){
                  $password=md5(md5($password));
                  $user=array(':username'=>$username,':password'=>$password);
                  $rst=$this->_user->userQ($user);
                  if($rst){
                     $_SESSION['info']=$rst;
                     header("Location: http://localhost/member");
                  }else{
                     header("refresh:3;url=http://localhost/member/login");
                     echo '用户信息不正确<br>'.'请重新登陆三秒后自动转跳';
                  }
               }else {
                  header("refresh:3;url=http://localhost/member/login");
                  echo '请检查登陆信息不符合规则<br>'.'三秒后自动转跳';
               }
            }
         }
      }
   }
   public function register()
   {
      if ($this->login){
         $this->index();
      }else{
         if($_SERVER['REQUEST_METHOD']=='GET'){
            $Title="十元小店商品列表";
            $this->assign('Title',$Title);
            $this->assign('token',SetToken());
            $this->display('register.html');
         }else {
            if ($this->params()['token'] != $_SESSION['token']) {
               echo "请勿重复提交";
               header("refresh:3;url=http://localhost/member/login");
            } else {
               SetToken();
               $username=$this->params()['username'];
               $password=$this->params()['password'];
               $telephone=$this->params()['telephone'];
               if(preg_match('/^[a-zA-z]\w{5,15}$/',$password)&&preg_match('/^[a-zA-z]\w{5,15}$/',$username)&&preg_match('/^1[34578]\d{9}$/',$telephone)){
                  $pass=true;
               }else{
                  $pass=false;
               }
               if ($pass){
                  $password=md5(md5($password));
                  $user = array('username' =>$username, 'telephone' =>$telephone, 'password' =>$password, 'login_ip' =>$this->_getIP());
                  $code = $this->_user->userI($user);
                  if ($code == 0) {
                     header("refresh:3;url=http://localhost/member/login");
                     echo '注册成功<br>' . '请登陆三秒后自动转跳';
                  } else {
                     header("refresh:3;url=http://localhost/member/register");
                     echo '注册失败<br>' . '请重新注册三秒后自动转跳';
                  }
               }else{
                  header("refresh:5;url=http://localhost/member/register");
                  echo '注册失败<br>' . '请检查注册信息是否正确';
               }
            }
         }
      }
   }
   public function accountLevel()
   {
      if ($this->login){
         $Title="十元小店商品列表";
         $this->assign('Title',$Title);
         $this->display('accountlevel.html');
      }
   }
   public function code(){
      $v=VerifyCode::getInstance();
      $v->imgEn(4);
      $_SESSION['code']=$v->getCode();
   }
   public  function verifyCode(){
      if ((isset($this->params()['verifycode'])&&isset($_SESSION['code'])&&$_SESSION['code']==$this->params()['verifycode'])) {
         echo json_encode('true');
      }else{
         echo json_encode('false');
      }
   }
   public function verifyName(){
      if (isset($this->params()['username'])){
         $user=array(':username'=>$this->params()['username']);
         $U=new UserModel();
         $rst=$U->usernameQ($user);
         if ($rst){
            echo json_encode('false');
            }else{
            echo json_encode('true');
         }
      }
   }
   public function verifyTel(){
      if (isset($this->params()['telephone'])){
         $user=array(':telephone'=>$this->params()['telephone']);
         $rst=$this->_user->telephoneQ($user);
         if ($rst){
            echo json_encode('false');
         }else{
            echo json_encode('true');
         }
      }
   }
   public function destroy(){
      if ($this->login) {
         if (isset($_SESSION['info'])) {
            unset ($_SESSION['info']);
         }
      }
      header("refresh:1;url=http://localhost/member/login");
      echo '注销成功<br>';
   }
   private function _getIP() {
      if (getenv('HTTP_CLIENT_IP')) {
      $ip = getenv('HTTP_CLIENT_IP');
      }
      elseif (getenv('HTTP_X_FORWARDED_FOR')) {
         $ip = getenv('HTTP_X_FORWARDED_FOR');
      }
      elseif (getenv('HTTP_X_FORWARDED')) {
         $ip = getenv('HTTP_X_FORWARDED');
      }
      elseif (getenv('HTTP_FORWARDED_FOR')) {
         $ip = getenv('HTTP_FORWARDED_FOR');

      }
      elseif (getenv('HTTP_FORWARDED')) {
         $ip = getenv('HTTP_FORWARDED');
      }
      else {
         $ip = $_SERVER['REMOTE_ADDR'];
      }
      return $ip;
   }
}