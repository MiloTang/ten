<?php
/* Smarty version 3.1.30-dev/86, created on 2017-04-04 03:24:50
  from "D:\xampp\htdocs\xialibao\home\view\templates\productdetails.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_58e2f5e28b8135_68112100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a04cb3b1b2b0a669aefeb24ea3ee614b186d0ec5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\productdetails.html',
      1 => 1491269086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58e2f5e28b8135_68112100 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</title>
    <link rel="stylesheet" href="./home/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="./home/static/css/bootstrap-theme.min.css">
    <link href="./home/static/css/shoping.css" rel="stylesheet">
    <link rel="stylesheet" href="./home/static/css/sweetalert.css">
	<?php echo '<script'; ?>
 src="./home/static/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./home/static/js/bootstrap.min.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="./home/static/js/sweetalert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./home/static/js/details.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='./home/static/js/jquery.elevatezoom.js'><?php echo '</script'; ?>
>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
       <div class="col-sm-6 col-xs-12">
           <img id="zoom_pic" class="thumbnail" src="./home/static/images/small/image1.png" data-zoom-image="./home/static/images/large/image1.jpg"/>
           <hr>
           <div id="gallery_01">
               <a href="#" data-image="./home/static/images/small/image1.png" data-zoom-image="./home/static/images/large/image1.jpg">
                   <img id="img_01" src="./home/static/images/thumb/image1.jpg" />
               </a>

               <a href="#" data-image="./home/static/images/small/image2.png" data-zoom-image="./home/static/images/large/image2.jpg">
                   <img id="img_02" src="./home/static/images/thumb/image2.jpg" />
               </a>

               <a href="#" data-image="./home/static/images/small/image3.png" data-zoom-image="./home/static/images/large/image3.jpg">
                   <img id="img_03" src="./home/static/images/thumb/image3.jpg" />
               </a>

               <a href="#" data-image="./home/static/images/small/image4.png" data-zoom-image="./home/static/images/large/image4.jpg">
                   <img id="img_04" src="./home/static/images/thumb/image4.jpg" />
               </a>

           </div>
       </div>

        <div class="col-sm-6 col-xs-12">
                   <h2><b>贵州高原山区野生竹荪</b></h2>
           <label>竹荪为竹林腐生真菌，以分解死亡的竹根、竹竿和竹叶等为营养源。野生时多生长于楠竹、平竹、苦竹、慈竹等竹林里，其土质有黑色壤土、紫色土、黄泥土等。竹荪营腐生生活，其菌丝能穿透许多微生物的拮抗线，能利用许多微生物不能利用的纤维素、木质素。因此，人工栽培时，可用竹木屑及多种农作物秸秆及少量无机盐等，即可满足其营养需求。</label>
            <div class="well">价格：<label style="font-size:30px;color: red">￥599.99</label> 
			<label class="pull-right">月销量：999999 &nbsp;好评率：<span style="color: rgb(255, 72, 60);" class="glyphicon glyphicon-star"></span><span style="color: rgb(255, 72, 60);" class="glyphicon glyphicon-star"></span><span style="color: rgb(255, 72, 60);" class="glyphicon glyphicon-star"></span><span style="color: rgb(255, 72, 60);" class="glyphicon glyphicon-star"></span><span style="color: rgb(255, 72, 60);" class="glyphicon glyphicon-star"></span></label>
		     </div>
            <div style="float:left;font-size:22px">配 送 至：</div>
            <div style="float:left"><select style="display:inline" name="zone_id" id="SelectProvince" class="form-control pull-left"></select></div>
            <div style="float:left"><select style="display:inline" name="zone_id" id="SelectCity" class="form-control pull-left"></select></div>
			<div style="float:left"><select style="display:inline" name="zone_id" id="SelectDistrict" class="form-control pull-left"></select></div>
			<div style="clear:both"></div>
			<br>
			<div style="float:left;font-size:20px">购买：</div>
            <div class="input-group input-group" style="width: 150px;float:left;">
            <span class="input-group-btn">
			
               <button class="btn btn-default"  id="minus" type="button"><span style="color: rgb(255, 140, 60);" class="glyphicon glyphicon-minus" ></span></button>
             </span>
                <input type="text" class="form-control" id="num" value="1">
                 <span class="input-group-btn">
               <button class="btn btn-default" id="plus" type="button"><span style="color: rgb(255, 140, 60);" class="glyphicon glyphicon-plus" ></span></button>
             </span>
            </div>
			<div style="float:left;font-size:20px;padding-left:20px">库存：1234件</div>
			<div style="clear:both"></div>
            <br>
            <div class="btn-group">
                <button type="button" class="btn btn-warning btn-lg">立刻购买</button>
                <button type="button" class="btn btn-danger btn-lg">加入购物车</button>
                <button type="button" class="btn btn-info btn-lg">分享给好友</button>
				<button type="button" class="btn btn-success btn-lg">收藏产品</button>
            </div>
        </div>
    </div>
	<hr>

  <div class="tabbable" id="tabs-production" style="padding-top:20px"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
	<li class="active"><a href="#panel-details" data-toggle="tab" contenteditable="true">产品详情</a></li>
	<li class=""><a href="#panel-message" data-toggle="tab" contenteditable="true">用户评论<b style="padding-left:10px;color:red">(1234)</b></a></li>
	<li class=""><a href="#panel-server" data-toggle="tab" contenteditable="true">售后服务</a></li>
  </ul>
  <div class="tab-content">
	<div class="tab-pane active" id="panel-details" contenteditable="true">
	  <p>产品详情</p>
	</div>
	<div class="tab-pane" id="panel-message" contenteditable="true">
	  <p>用户评论</p>
	</div>
	<div class="tab-pane" id="panel-server" contenteditable="true">
	  <p>售后服务</p>
	</div>
  </div>
</div>
              

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html><?php }
}
