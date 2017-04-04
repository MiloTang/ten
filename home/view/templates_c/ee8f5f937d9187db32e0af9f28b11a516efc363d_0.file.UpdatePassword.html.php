<?php
/* Smarty version 3.1.30-dev/86, created on 2016-08-02 05:18:09
  from "E:\xampp\htdocs\xialibao\home\view\templates\UpdatePassword.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_57a010f16d7782_05227569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee8f5f937d9187db32e0af9f28b11a516efc363d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\UpdatePassword.html',
      1 => 1470107886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a010f16d7782_05227569 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <h1>更改密码</h1>
    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend>密码</legend>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-password">密码</label>
                <div class="col-sm-10">
                    <input name="password" value="" placeholder="密码" id="input-password" class="form-control" type="password">
                </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-confirm">确认密码</label>
                <div class="col-sm-10">
                    <input name="confirm" value="" placeholder="确认密码" id="input-confirm" class="form-control" type="password">
                </div>
            </div>
        </fieldset>
        <div class="buttons clearfix">
            <div class="pull-left"><a href="index.html?action=account" class="btn btn-default">返回</a></div>
            <div class="pull-right">
                <input value="继续" class="btn btn-primary" type="submit">
            </div>
        </div>
    </form>
<?php }
}
