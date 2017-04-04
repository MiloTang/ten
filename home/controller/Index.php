<?php
/**
 * Created by PhpStorm.
 * User: milo tang
 * Date: 2016/7/20
 * Time: 20:05
 */
class Index extends Controller
{
      public function __construct($template)
      {
          parent::__construct();
          $this->assign('Title','U谷物');
          $this->view($template);
      }

}
