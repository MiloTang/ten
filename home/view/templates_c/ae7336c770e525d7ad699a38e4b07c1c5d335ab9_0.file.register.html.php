<?php
/* Smarty version 3.1.30-dev/86, created on 2017-03-19 08:04:54
  from "D:\xampp\htdocs\xialibao\home\view\templates\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_58ce2d963ba147_73227397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae7336c770e525d7ad699a38e4b07c1c5d335ab9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\register.html',
      1 => 1469938178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58ce2d963ba147_73227397 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="./home/static/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./home/static/css//bootstrap-theme.min.css">
    <link href="./home/static/css/shoping.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="./home/static/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./home/static/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="padding-top:80px">
<div class="row">

    <div  class="col-sm-12">
        <h1>注册账户</h1>
    <p>欢迎来到我们网站，如果您是新会员，请填写下面的表单进行注册。如果您已经是本站的会员，请您直接<a href="index.html?action=login">登录</a>。</p>
    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset id="account">
            <legend>您的个人资料</legend>
            <div class="form-group required">
                <label class="col-sm-2 control-label" >用户昵称</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="昵称">
                    </div>
                </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" >电子邮箱</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span></span>
                        <input type="text" class="form-control" placeholder="电子邮箱">
                    </div>
                </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" >手机号码</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><span  class="glyphicon glyphicon-earphone"> </span></span>
                        <input type="text" class="form-control" placeholder="手机号码">
                    </div>
                </div>
            </div>




        </fieldset>

        <fieldset>
            <legend>账户密码</legend>
            <div class="form-group required">
                <label class="col-sm-2 control-label" >密码</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><span  class="glyphicon glyphicon-lock"> </span></span>
                        <input type="text" class="form-control" placeholder="输入密码">
                    </div>
                </div>
            </div>
            <div class="form-group required">
            <label class="col-sm-2 control-label" >确认密码</label>
            <div class="col-sm-10">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><span style="color: rgb(255, 140, 60);" class="glyphicon glyphicon-lock"></span></span>
                    <input type="text" class="form-control" placeholder="确认密码">
                </div>
            </div>
        </div>

        </fieldset>

        <fieldset>
            <legend>验证码</legend>
            <div class="form-group required">
                <label class="col-sm-2 control-label" >验证码</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">1+6=？</span>
                        <input type="text" class="form-control" placeholder="确认密码">
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="buttons">
            <div class="pull-right">我已经阅读并同意 <a href="#" class="agree"><b>隐私政策</b></a>条款                        <input name="agree" value="1" type="checkbox">
                &nbsp;
                <input value="继续" class="btn btn-primary" type="submit">
            </div>
        </div>
    </form>
</div>

</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
