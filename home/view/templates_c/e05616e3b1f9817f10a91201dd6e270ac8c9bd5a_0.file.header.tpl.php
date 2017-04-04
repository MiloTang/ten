<?php
/* Smarty version 3.1.30-dev/86, created on 2017-04-01 02:45:47
  from "D:\xampp\htdocs\xialibao\home\view\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_58def83b574f02_13103607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e05616e3b1f9817f10a91201dd6e270ac8c9bd5a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\header.tpl',
      1 => 1491007544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58def83b574f02_13103607 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-fixed-bottom">
<div class="container-fluid" style="font-size:2.2rem;padding-top:1rem;text-align:center;">
      <div class="col-xs-3 col-sm-3">
			<div class="dropdown">
				<a href="index.html?action=productList&type=食用菌">
					<span class="glyphicon glyphicon-home"></span>
				</a>
			</div>
			</div>
			<div class="col-xs-3 col-sm-3">
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
			<div class="col-xs-3 col-sm-3">
				<div class="dropup">
				<a class="dropdown-toggle"  id="menu1" data-toggle="dropdown">
				<span class="glyphicon glyphicon-shopping-cart"></span></a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">一斤药材</a></li>
				  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">一斤坚果</a></li>
				  <li class="divider"></li>
				  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">总价</a></li>
				</ul>
			  </div>
			</div>	
			<div class="col-xs-3 col-sm-3">
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
