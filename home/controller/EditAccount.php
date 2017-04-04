<?php
/**
 * Created by PhpStorm.
 * User: francis and winnie
 * Date: 2016/7/21
 * Time: 11:09
 */
class EditAccount extends Controller
{
    public function __construct($template)
    {
        parent::__construct();
        $this->assign('Title','下里宝商城');
        $this->view($template);
    }

}