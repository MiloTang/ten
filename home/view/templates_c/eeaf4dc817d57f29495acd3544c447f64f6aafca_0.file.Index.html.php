<?php
/* Smarty version 3.1.30-dev/86, created on 2016-08-07 05:03:32
  from "E:\xampp\htdocs\xialibao\home\view\templates\Index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_57a6a5040b17e2_45357478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeaf4dc817d57f29495acd3544c447f64f6aafca' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xialibao\\home\\view\\templates\\Index.html',
      1 => 1470538967,
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
function content_57a6a5040b17e2_45357478 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php $_smarty_tpl->_subTemplateRender("file:brand.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<div class="row">
<div id="myCarousel" class="carousel slide" >
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="./home/static/images/1.jpg" alt="First slide">
            <div class="carousel-caption">西藏的茶，据说是文成公主作为嫁妆带入的。藏族作为一个有悠久历史的民族，其饮食习俗别具风格，其中酥油茶便是藏民族特有的营养饮料，以其原料的营养性、制作方法的独特性而闻名遐迩。形成了别具特色的高原茶文化。西藏高原上的茶文化，至少也有千年以上的历史了。茶叶在唐以前亦称“荼”，《尔雅·释木篇》中说：“木，苦荼(茶)也。”藏语称茶为“荚”，是当时汉语“”(茶树)的译音。茶叶具有消食、止渴、去腻等特殊的功能，对于缺氧、干燥和以肉食、酥油、糌粑为主食的青藏高原人来说，确实是不能一日无茶。</div>
        </div>
        <div class="item">
            <img src="./home/static/images/2.jpg" alt="Second slide">
            <div class="carousel-caption">我国野生蘑菇资源十分丰富,可食蘑菇可达1000种,但在大量采食野生蘑菇的同时,每年因误食野生毒蘑菇而中毒的事件时有发生,其死亡率居各类毒物中毒事件之首.为预防野生蘑菇中毒,让广大专业人员及公众了解并掌握野生蘑菇中毒预防及治疗的基本知识,中国疾病预防控制中心职业卫生与中毒控制所和中国科学院昆明植物研究所合作</div>
        </div>
        <div class="item">
            <img src="./home/static/images/3.jpg" alt="Third slide">
            <div class="carousel-caption">没有人希望看到食物被浪费。... 但为了帮助我们保持健康,我们需要确保我们的食物尽可能地新鲜。这样食物浪费就不可避免了,对吗? 全世界正在自己动手种植食品的人们</div>
        </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#myCarousel"
       data-slide="prev"></a>
    <a class="carousel-control right" href="#myCarousel"
       data-slide="next"></a>
</div>
</div>
    <div class="row">
        <div class="page-header text-center">
            <h2>
                热销产品
            </h2>
        </div>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" style="border: 1px solid rgb(221, 221, 221); box-shadow: 10px 10px 10px rgb(102, 102, 102); background: white none repeat scroll 0% 0%;" onmouseover="style.background='#FFF8DC'" onmouseout="style.background='white'">
                <div class="image"><a href="#"><img src="./home/static/images/a.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
    <div class="row">
        <div class="page-header text-center">
            <h2>
                本周团购
            </h2>
        </div>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" style="border: 1px solid rgb(221, 221, 221); box-shadow: 10px 10px 10px rgb(102, 102, 102); background: white none repeat scroll 0% 0%;" onmouseover="style.background='#FFF8DC'" onmouseout="style.background='white'">
                <div class="image"><a href="#"><img src="./home/static/images/i.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                <div class="image"><a href="#"><img src="./home/static/images/j.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                <div class="image"><a href="#"><img src="./home/static/images/k.jpg" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                <div >
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
                    <h4><a href="#">高原小鲜菇</a></h4>
                    
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
