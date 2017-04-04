<?php
/* Smarty version 3.1.30-dev/86, created on 2016-08-07 05:04:12
  from "E:\xampp\htdocs\xialibao\home\view\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_57a6a52c2a2cf0_89786833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3c690ab562ac1f13449094a8445fb61ac51d112' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\header.tpl',
      1 => 1470539050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a6a52c2a2cf0_89786833 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="font-size:1.5em;">
    <div class="navbar-header" >
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">U谷物</a>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.html?action=productList&type=食用菌">食用菌</a></li>
            <li><a href="index.html?action=productList&type=粗粮类">粗粮类</a></li>
            <li><a href="index.html?action=productList&type=药材类">药材类</a></li>
            <li><a href="index.html?action=productList&type=坚果类">坚果类</a></li>
        </ul>
		  <ul class="nav navbar-nav navbar-right " >   
               <li><a href="index.html?action=register">注册</a></li>
               <li> <a href="index.html?action=login">登录</a></li>			                    
      </ul>
    </div>
</nav>
<?php }
}
