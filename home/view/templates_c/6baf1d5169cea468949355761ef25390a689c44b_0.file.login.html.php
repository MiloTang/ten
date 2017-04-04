<?php
/* Smarty version 3.1.30-dev/86, created on 2017-03-19 08:04:57
  from "D:\xampp\htdocs\xialibao\home\view\templates\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_58ce2d99f152b6_84280931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6baf1d5169cea468949355761ef25390a689c44b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\login.html',
      1 => 1469409046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58ce2d99f152b6_84280931 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</title>
    <link href="./home/static/css/bootstrap.min.css" rel="stylesheet">
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

<div class="container" style="padding-top: 150px">
   <div class="row">
   <div class="col-md-2">
   </div>
       <div class="col-md-8">
<h4 class="text-center"><b>会员登录</b></h4>
<br>

<br>
<form class="form-horizontal" id="signupForm" method="post" action="/sample/LoginVerify.php">

   <div class="form-group">     
    <div class="input-group input-group-lg">
						<div class="input-group-addon">
							<span  style="color: rgb(255, 140, 60);" class="glyphicon glyphicon-envelope"></span>
						</div>
						<input class="form-control" name="email" id="email" placeholder="电子邮箱" type="text">
	</div>
   </div>
    <i></i>
   <div class="form-group">
      
      <div class="input-group input-group-lg">
						<div class="input-group-addon">
							<span style="color: rgb(255, 140, 60);"  class="glyphicon glyphicon-lock"></span>
						</div>

						<input class="form-control" name="password" id="password" placeholder="密码" type="password">
					</div>
   </div>
    <i></i>
    <label  class="pull-right">如果你不是本站会员，<a href="index.html?action=register">注册</a>一个账户更方便</label>
    <label  class="pull-left"><a href="#">忘记密码</a></label>

   <div class="form-group">  
         <button type="button" class="btn btn-danger btn-lg btn-block" id="subform">LOGON</button>
   </div>
</form>
</div>
 <div class="col-md-2">
   </div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
