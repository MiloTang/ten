<?php
/**
 * Created by PhpStorm.
 * User: francis and winnie
 * Date: 2016/7/21
 * Time: 11:09
 */
class Manageaddress extends Controller
{
    public function __construct($template)
    {
        parent::__construct();
        $this->assign('Title','优谷物');
        $this->view($template);
    }

}