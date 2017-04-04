<?php
/* Smarty version 3.1.30-dev/86, created on 2016-08-07 06:01:12
  from "E:\xampp\htdocs\xialibao\home\view\templates\accountlevel.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_57a6b28884fcc7_06909628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '100b24cb5d1feef04d97873dfc4f39af847942cc' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\accountlevel.html',
      1 => 1470542469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a6b28884fcc7_06909628 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <h1>会员等级</h1>
 <table class="table">
     <legend>会员等级说明</legend>
     <thead>
     <tr>
         <th>等级</th>
         <th>积分</th>
         <th>标识</th>
     </tr>
     </thead>
     <tbody>
     <tr>
         <td>初级会员</td>
         <td>1-999</td>
         <td>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-star-empty"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-star-empty"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-star-empty"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-star-empty"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-star-empty"></span>
         </td>
     </tr>
     <tr>
         <td>黄金会员</td>
         <td>1000-999999</td>
         <td>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-star"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-star"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-star"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-star"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-star"></span>
         </td>
     </tr>
     <tr>
         <td>白金会员</td>
         <td>1000000-99999999</td>
         <td>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-heart-empty"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-heart-empty"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-heart-empty"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-heart-empty"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-heart-empty"></span>
         </td>
     </tr>
     <trc lass="success">
         <td>砖石会员</td>
         <td>100000000-99999999999</td>
         <td>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-heart"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-heart"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-heart"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-heart"></span>
             <span style="color: rgb(255, 0, 0);" class="glyphicon glyphicon-heart"></span>
         </td>
     </tr>
     </tbody>
 </table>
 你的等级是：
<?php }
}
