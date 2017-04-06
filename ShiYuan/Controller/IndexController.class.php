<?php
namespace ShiYuan\Controller;
use Core\Libs\BaseController;
class IndexController extends BaseController
{

   public function index()
   {
      $Title="十元小店";
      $this->assign('Title',$Title);
      $this->display('index.html');
   }
   public function productList()
   {
      $Title="十元小店商品列表";
      $this->assign('Title',$Title);
      $this->display('productlist.html');
   }

}