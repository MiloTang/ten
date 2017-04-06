<?php
namespace ShiYuan\Controller;
use Core\Libs\BaseController;
class ProductListController extends BaseController
{

   public function index()
   {
      $Title="十元小店商品列表";
      $this->assign('Title',$Title);
      $this->display('productlist.html');
   }
}