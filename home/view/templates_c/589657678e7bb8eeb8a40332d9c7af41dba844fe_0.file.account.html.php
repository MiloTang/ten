<?php
/* Smarty version 3.1.30-dev/86, created on 2016-08-07 06:19:32
  from "E:\xampp\htdocs\xialibao\home\view\templates\account.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_57a6b6d498e2e1_39738349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '589657678e7bb8eeb8a40332d9c7af41dba844fe' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\account.html',
      1 => 1470543570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57a6b6d498e2e1_39738349 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</title>
    <link href="./home/static/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./home/static/css//bootstrap-theme.min.css">
    <link href="./home/static/css/shoping.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="./home/static/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./home/static/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./home/static/js/account.js"><?php echo '</script'; ?>
>

</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="padding-top:80px">
  <ul class="breadcrumb">
        <li><a href="index.html"><span style="color: rgb(255, 140, 60); font-size: 20px" class="glyphicon glyphicon-home"> 首页</span></a></li>
        <li><a href="#"><h4>我的账户</h4></a></li>
    </ul>
    <div class="row">                
	<div class="col-sm-3">
   <a href="#" class="list-group-item active">
      <h4 class="list-group-item-heading">
         我的账户
      </h4>
   </a>
  <a href="javascript:;" id="accountlevel" class="list-group-item">
  <h4 class="list-group-item-heading">
	 会员等级
  </h4>
   </a>
        <a href="javascript:;" id="editaccount" class="list-group-item">
            <h4 class="list-group-item-heading">
                修改信息
            </h4>
        </a>
   <a href="javascript:;" id="updatepassword" class="list-group-item">
      <h4 class="list-group-item-heading">
         修改密码
      </h4>
   </a>

   <a href="javascript:;" id="manageaddress" class="list-group-item">
      <h4 class="list-group-item-heading">
         收货地址
      </h4>
	</a>
	<a href="javascript:;" id="loveproduction" class="list-group-item">
      <h4 class="list-group-item-heading">
         收藏商品
      </h4>
	</a>
    <a href="#" class="list-group-item active" >
      <h4 class="list-group-item-heading" >
         我的订单
      </h4>
   </a>
   <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">
         订单管理
      </h4>
   </a>
   <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">
         订单历史
      </h4>
   </a>
   <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">
         预售订单
      </h4>
   </a>
   <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">
         团购订单
      </h4>
   </a>
   <a href="#" class="list-group-item active" >
      <h4 class="list-group-item-heading" >
         我的业绩
      </h4>
   </a>
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">
         销售链接
      </h4>
   </a>
   <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">
         销售级别
      </h4>
   </a>
   <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">
         销售订单
      </h4>
   </a>
     <a href="#" class="list-group-item active" >
      <h4 class="list-group-item-heading" >
         客户服务
      </h4>
   </a>
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">
         退换货记录
      </h4>
   </a>
   <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">
         购买咨询
      </h4>
   </a>
   <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">
         我的发票
      </h4>
   </a>
     <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">
         意见建议
      </h4>
   </a>
</div>
<div  class="col-sm-9">     
<div id="accoutcontent">


 </div>
</div>
 
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
