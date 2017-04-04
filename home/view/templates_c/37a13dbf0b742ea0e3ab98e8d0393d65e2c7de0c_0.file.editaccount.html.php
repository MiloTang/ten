<?php
/* Smarty version 3.1.30-dev/86, created on 2016-08-02 04:05:54
  from "E:\xampp\htdocs\xialibao\home\view\templates\editaccount.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_57a000027fca84_91845108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37a13dbf0b742ea0e3ab98e8d0393d65e2c7de0c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\editaccount.html',
      1 => 1470057649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a000027fca84_91845108 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>My Account Information</h1>
 <form action="http://localhost/opencart/index.php?route=account/edit" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend>Your Personal Details</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">First Name </label>
            <div class="col-sm-10">
              <input name="firstname" value="miloit" placeholder="First Name" id="input-firstname" class="form-control" type="text">
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <div class="col-sm-10">
              <input name="lastname" value="milo" placeholder="Last Name" id="input-lastname" class="form-control" type="text">
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input name="email" value="milo@milo.com" placeholder="E-Mail" id="input-email" class="form-control" type="email">
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
            <div class="col-sm-10">
              <input name="telephone" value="18911111111" placeholder="Telephone" id="input-telephone" class="form-control" type="tel">
                          </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-fax">Fax</label>
            <div class="col-sm-10">
              <input name="fax" value="" placeholder="Fax" id="input-fax" class="form-control" type="text">
            </div>
          </div>
                  </fieldset>
        <div class="buttons clearfix">
          <div class="pull-left"><a href="http://localhost/opencart/index.php?route=account/account" class="btn btn-default">Back</a></div>
          <div class="pull-right">
            <input value="Continue" class="btn btn-primary" type="submit">
          </div>
        </div>
 </form><?php }
}
