<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-31 05:30:31
  from "E:\xampp\htdocs\xialibao\home\view\templates\productList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_579d70d778a1a3_00663881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46493ff1fc2e9c6ca6f2c99ed966a1502b5af3e5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\productList.html',
      1 => 1469935820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:brand.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_579d70d778a1a3_00663881 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</title>
    <link rel="stylesheet" href="./home/static/css//bootstrap.min.css">
    <link rel="stylesheet" href="./home/static/css//bootstrap-theme.min.css">
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
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:brand.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <ul class="breadcrumb">
        <li><a href="index.html"><span style="color: rgb(255, 140, 60); font-size: 20px" class="glyphicon glyphicon-home"> 首页</span></a></li>
        <li><a href="#"><h4><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</h4></a></li>
    </ul>
    <div class="row">
        <div class="col-sm-12 btn-group ">
            <button type="button" class="btn btn-default btn-lg" style="color: rgb(255, 140, 60);">综合<span class="glyphicon glyphicon-arrow-down"></span></button>
            <button type="button" class="btn btn-default btn-lg" style="color: rgb(255, 140, 60);">价格<span class="glyphicon glyphicon-arrow-down"></span></button>
            <button type="button" class="btn btn-default btn-lg" style="color: rgb(255, 140, 60);">人气<span class="glyphicon glyphicon-arrow-down"></span></button>
            <button type="button" class="btn btn-default btn-lg" style="color: rgb(255, 140, 60);">销量<span class="glyphicon glyphicon-arrow-down"></span></button>
            <button type="button" class="btn btn-default btn-lg" style="color: rgb(255, 140, 60);">新品<span class="glyphicon glyphicon-arrow-down"></span></button>
        </div>
    </div>
    <hr>
    <div class="row">

        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" style="border: 1px solid rgb(221, 221, 221); box-shadow: 10px 10px 10px rgb(102, 102, 102); background: white none repeat scroll 0% 0%;" onmouseover="style.background='#FFF8DC'" onmouseout="style.background='white'">
                <div class="image"><a href="#"><img  src="./home/static/images/a.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                   <h4><a href="index.html?action=productdetails&type=小香菇">高原小鲜菇</a></h4>

                    <p class="price">
                        价格：￥115</p>
                </div>
                <div class="button-group">
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-shopping-cart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-heart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-share"> </span></button>
                </div>
            </div>
        </div>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" style="border: 1px solid rgb(221, 221, 221); box-shadow: 10px 10px 10px rgb(102, 102, 102); background: white none repeat scroll 0% 0%;" onmouseover="style.background='#FFF8DC'" onmouseout="style.background='white'">
                <div class="image"><a href="#"><img src="./home/static/images/b.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                   <h4><a href="index.html?action=productdetails&type=小香菇">高原小鲜菇</a></h4>

                    <p class="price">
                        价格：￥115</p>
                </div>
                <div class="button-group">
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-shopping-cart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-heart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-share"> </span></button>
                </div>
            </div>
        </div>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" style="border: 1px solid rgb(221, 221, 221); box-shadow: 10px 10px 10px rgb(102, 102, 102); background: white none repeat scroll 0% 0%;" onmouseover="style.background='#FFF8DC'" onmouseout="style.background='white'">
                <div class="image"><a href="#"><img src="./home/static/images/c.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                   <h4><a href="index.html?action=productdetails&type=小香菇">高原小鲜菇</a></h4>

                    <p class="price">
                        价格：￥115</p>
                </div>
                <div class="button-group">
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-shopping-cart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-heart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-share"> </span></button>
                </div>
            </div>
        </div>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" style="border: 1px solid rgb(221, 221, 221); box-shadow: 10px 10px 10px rgb(102, 102, 102); background: white none repeat scroll 0% 0%;" onmouseover="style.background='#FFF8DC'" onmouseout="style.background='white'">
                <div class="image"><a href="#"><img src="./home/static/images/d.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                   <h4><a href="index.html?action=productdetails&type=小香菇">高原小鲜菇</a></h4>

                    <p class="price">
                        价格：￥115</p>
                </div>
                <div class="button-group">
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-shopping-cart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-heart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-share"> </span></button>
                </div>
            </div>
        </div>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" style="border: 1px solid rgb(221, 221, 221); box-shadow: 10px 10px 10px rgb(102, 102, 102); background: white none repeat scroll 0% 0%;" onmouseover="style.background='#FFF8DC'" onmouseout="style.background='white'">
                <div class="image"><a href="#"><img src="./home/static/images/e.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                   <h4><a href="index.html?action=productdetails&type=小香菇">高原小鲜菇</a></h4>

                    <p class="price">
                        价格：￥115</p>
                </div>
                <div class="button-group">
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-shopping-cart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-heart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-share"> </span></button>
                </div>
            </div>
        </div>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" style="border: 1px solid rgb(221, 221, 221); box-shadow: 10px 10px 10px rgb(102, 102, 102); background: white none repeat scroll 0% 0%;" onmouseover="style.background='#FFF8DC'" onmouseout="style.background='white'">
                <div class="image"><a href="#"><img src="./home/static/images/f.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                   <h4><a href="index.html?action=productdetails&type=小香菇">高原小鲜菇</a></h4>

                    <p class="price">
                        价格：￥115</p>
                </div>
                <div class="button-group">
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-shopping-cart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-heart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-share"> </span></button>
                </div>
            </div>
        </div>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" style="border: 1px solid rgb(221, 221, 221); box-shadow: 10px 10px 10px rgb(102, 102, 102); background: white none repeat scroll 0% 0%;" onmouseover="style.background='#FFF8DC'" onmouseout="style.background='white'">
                <div class="image"><a href="#"><img src="./home/static/images/g.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                   <h4><a href="index.html?action=productdetails&type=小香菇">高原小鲜菇</a></h4>

                    <p class="price">
                        价格：￥115</p>
                </div>
                <div class="button-group">
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-shopping-cart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-heart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-share"> </span></button>
                </div>
            </div>
        </div>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" style="border: 1px solid rgb(221, 221, 221); box-shadow: 10px 10px 10px rgb(102, 102, 102); background: white none repeat scroll 0% 0%;" onmouseover="style.background='#FFF8DC'" onmouseout="style.background='white'">
                <div class="image"><a href="#"><img src="./home/static/images/h.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                   <h4><a href="index.html?action=productdetails&type=小香菇">高原小鲜菇</a></h4>

                    <p class="price">
                        价格：￥115</p>
                </div>
                <div class="button-group">
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-shopping-cart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-heart"> </span></button>
                    <button type="button" class="btn btn-default"><span style="color: rgb(255, 140, 60);font-size: 20px" class="glyphicon glyphicon-share"> </span></button>
                </div>
            </div>
        </div>




    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
