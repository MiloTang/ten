<?php
/* Smarty version 3.1.30-dev/86, created on 2016-08-02 04:22:28
  from "E:\xampp\htdocs\xialibao\home\view\templates\EditAccount.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_57a003e4a74ef2_74769867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '784f2373c4bb4527b79dbdf47baa784bfeaecbca' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\EditAccount.html',
      1 => 1470104546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a003e4a74ef2_74769867 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>账户资料信息</h1>
 <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend>个人资料明细</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">用户名 </label>
            <div class="col-sm-10">
              <input name="firstname" value="miloit" placeholder="First Name" id="input-firstname" class="form-control" type="text">
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">电子邮件</label>
            <div class="col-sm-10">
              <input name="email" value="milo@milo.com" placeholder="E-Mail" id="input-email" class="form-control" type="email">
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">电话号码</label>
            <div class="col-sm-10">
              <input name="telephone" value="18911111111" placeholder="Telephone" id="input-telephone" class="form-control" type="tel">
                          </div>
          </div>

        </fieldset>
        <div class="buttons clearfix">
          <div class="pull-left"><a href="index.html?action=account" class="btn btn-default">返回</a></div>
          <div class="pull-right">
            <button  class="btn btn-primary" type="button">确认修改</button>
          </div>
        </div>
 </form><?php }
}
