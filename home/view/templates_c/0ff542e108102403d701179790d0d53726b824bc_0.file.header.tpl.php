<?php
/* Smarty version 3.1.30-dev/86, created on 2017-04-04 06:20:51
  from "D:\xampp\htdocs\ten\home\view\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_58e31f233405d1_48388102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ff542e108102403d701179790d0d53726b824bc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ten\\home\\view\\templates\\header.tpl',
      1 => 1491279648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e31f233405d1_48388102 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-fixed-bottom">
<div class="container-fluid" style="font-size:2.2rem;padding-top:1rem;text-align:center;">
      <div class="col-xs-4 col-sm-4">
			<div class="dropdown">
				<a href="index.html?action=productList&type=食用菌">
					<span class="glyphicon glyphicon-home"></span>
				</a>
			</div>
			</div>
			<div class="col-xs-4 col-sm-4">
				<div class="dropup">
				<a class="dropdown-toggle"  id="menu1" data-toggle="dropdown">
				<span class="glyphicon glyphicon-th-large"></span></a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">药材</a></li>
				  <li class="divider"></li>
				  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">坚果</a></li>
				  <li class="divider"></li>
				   <li role="presentation"><a role="menuitem" tabindex="-1" href="#">菌类</a></li>
				  <li class="divider"></li>
				  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">杂粮</a></li>
				</ul>
			  </div>
			</div>	
			<div class="col-xs-4 col-sm-4">
			<div class="dropdown">
				<a href="index.html?action=login">
					<span class="glyphicon glyphicon-user"></span>
				</a>
			</div>
			</div>	
	 
	</div>
</nav>
<?php }
}
