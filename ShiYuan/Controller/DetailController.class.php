<?php
namespace ShiYuan\Controller;
use Core\Libs\BaseController;
class DetailController extends BaseController
{

   public function index()
   {
      $Title="十元小店";
      $this->assign('Title',$Title);
      $this->display('detail.html');
   }

}