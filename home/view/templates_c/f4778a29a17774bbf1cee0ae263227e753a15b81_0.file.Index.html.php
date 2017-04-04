<?php
/* Smarty version 3.1.30-dev/86, created on 2017-04-04 05:49:45
  from "D:\xampp\htdocs\ten\home\view\templates\Index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_58e317d931b782_55614656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4778a29a17774bbf1cee0ae263227e753a15b81' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ten\\home\\view\\templates\\Index.html',
      1 => 1491277783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58e317d931b782_55614656 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</title>
    <link href="./home/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="./home/static/css/shoping.css" rel="stylesheet">
	<link rel="stylesheet" href="./home/static/css/swiper.min.css">
    <?php echo '<script'; ?>
 src="./home/static/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./home/static/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	 <style>
    html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 50%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    </style>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Carousel
================================================== -->
<div class="swiper-container" style="margin-bottom:1rem">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./home/static/images/1.jpg" width="100%" height="100%"></div>
            <div class="swiper-slide"><img src="./home/static/images/2.jpg" width="100%" height="100%"></div>
            <div class="swiper-slide"><img src="./home/static/images/3.jpg" width="100%" height="100%"></div>
            <div class="swiper-slide"><img src="./home/static/images/4.jpg" width="100%" height="100%"></div>
            <div class="swiper-slide"><img src="./home/static/images/5.jpg" width="100%" height="100%"></div>
			<div class="swiper-slide"><img src="./home/static/images/6.jpg" width="100%" height="100%"></div>
			<div class="swiper-slide"><img src="./home/static/images/7.jpg" width="100%" height="100%"></div>
			<div class="swiper-slide"><img src="./home/static/images/8.jpg" width="100%" height="100%"></div>
			<div class="swiper-slide"><img src="./home/static/images/9.jpg" width="100%" height="100%"></div>
			<div class="swiper-slide"><img src="./home/static/images/10.jpg" width="100%" height="100%"></div>
			
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
</div><!-- /.carousel -->

<div class="container">
<form class="bs-example bs-example-form" role="form">
    <div class="input-group input-group-lg">

        <input type="text" class="form-control" placeholder="竹荪">
        <span class="input-group-addon"><span style="color: rgb(255, 140, 60);font-size:20px" class="glyphicon glyphicon-search "></span></span>
    </div>
</form>
    <div class="row">
        <div class="text-center">
            <h2>
                热销产品
            </h2>
        </div>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/a.jpg" alt="MacBook" title="MacBook" width="100%" ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/b.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image" ><a href="#"><img src="./home/static/images/c.jpg"  alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/d.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/e.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/f.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/g.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/h.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
        <div class="text-center">
            <h2>
                本周团购
            </h2>
        </div>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/i.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/j.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/k.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/d.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/e.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/f.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/g.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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
            <div class="product-thumb transition" >
                <div class="image"><a href="#"><img src="./home/static/images/h.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
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

<?php echo '<script'; ?>
 src="./home/static/js/swiper.min.js"><?php echo '</script'; ?>
>

    <!-- Initialize Swiper -->
   <?php echo '<script'; ?>
>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
