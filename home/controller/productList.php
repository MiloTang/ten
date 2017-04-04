<?php
/**
 * Created by PhpStorm.
 * User: milo tang
 * Date: 2016/7/20
 * Time: 20:05
 */
class productList extends Controller
{
      public function __construct($template)
      {
          parent::__construct();
          $this->assign('Title','下里宝商城');
          $this->assign('type',$_GET['type']);
          $this->view($template);
      }

}
