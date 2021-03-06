<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title><?php echo $Title; ?></title>
    <link href="http://localhost/Public/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/Public/static/css/shoping.css" rel="stylesheet">
	<link rel="stylesheet" href="http://localhost/Public/static/css/swiper.min.css">
    <script src="http://localhost/Public/static/js/jquery.min.js"></script>
    <script src="http://localhost/Public/static/js/bootstrap.min.js"></script>
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
    a:hover
    {
        opacity: 0.6;
    }
    </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container-fluid" style="font-size:2.2rem;padding-top:1rem;text-align:center;">
        <div class="col-xs-4 col-sm-4">
            <div class="dropdown">
                <a href="http://localhost/index">
                    <span class="glyphicon glyphicon-home"></span>
                </a>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4">
            <div class="dropdown">
                <a href="http://localhost/productlist">
                    <span class="glyphicon glyphicon-th-large"></span>
                </a>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4">
            <div class="dropdown">
                <a href="http://localhost/member">
                    <span class="glyphicon glyphicon-user"></span>
                </a>
            </div>
        </div>

    </div>
</nav>

<!-- Carousel
================================================== -->
<div class="swiper-container" style="margin-bottom:1rem">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="http://localhost/Public/static/images/1.jpg" width="100%" height="100%"></div>
            <div class="swiper-slide"><img src="http://localhost/Public/static/images/2.jpg" width="100%" height="100%"></div>
            <div class="swiper-slide"><img src="http://localhost/Public/static/images/3.jpg" width="100%" height="100%"></div>
            <div class="swiper-slide"><img src="http://localhost/Public/static/images/4.jpg" width="100%" height="100%"></div>
            <div class="swiper-slide"><img src="http://localhost/Public/static/images/5.jpg" width="100%" height="100%"></div>
			<div class="swiper-slide"><img src="http://localhost/Public/static/images/6.jpg" width="100%" height="100%"></div>
			<div class="swiper-slide"><img src="http://localhost/Public/static/images/7.jpg" width="100%" height="100%"></div>
			<div class="swiper-slide"><img src="http://localhost/Public/static/images/8.jpg" width="100%" height="100%"></div>
			<div class="swiper-slide"><img src="http://localhost/Public/static/images/9.jpg" width="100%" height="100%"></div>
			<div class="swiper-slide"><img src="http://localhost/Public/static/images/10.jpg" width="100%" height="100%"></div>
			
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/a.jpg" alt="MacBook" title="MacBook" width="100%" ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/b.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image" ><a href="#"><img src="http://localhost/Public/static/images/c.jpg"  alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/d.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/e.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/f.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/g.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/h.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/i.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/j.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/k.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/d.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/e.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/f.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/g.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
                <div class="image"><a href="#"><img src="http://localhost/Public/static/images/h.jpg" alt="MacBook" title="MacBook" width="100%"  ></a></div>
                <div >
                    <a href="http://localhost/detail">高原小鲜菇</a>

                    <div><span class="price">
                        价格:￥115</span> <span class="price pull-right">
                        已售:2115</span></div>
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
<footer style="width: 100%;background-color:#303030; margin-top: 1rem;padding-top: 30px;color:#fff">
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-xs-4">
                <h5>网超信息</h5>
                <ul class="list-unstyled">
                    <li><a href="#">关于我们</a></li>
                    <li><a href="#">物流配送</a></li>
                    <li><a href="#">隐私政策</a></li>
                    <li><a href="#">使用条款</a></li>
                </ul>
            </div>
            <div class="col-xs-4 col-sm-4 col-xs-4">
                <h5>会员服务</h5>
                <ul class="list-unstyled">
                    <li><a href="#">联系我们</a></li>
                    <li><a href="#">网站地图</a></li>
                    <li><a href="#">推广会员</a></li>
                    <li><a href="#">优惠商品</a></li>
                </ul>
            </div>
            <div class="col-xs-4 col-sm-4 col-xs-4">
                <h5>会员中心</h5>
                <ul class="list-unstyled">
                    <li><a href="#">会员中心</a></li>
                    <li><a href="#">历史订单</a></li>
                    <li><a href="#">收藏列表</a></li>
                    <li><a href="#">订阅咨询</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p style="color: white;margin-bottom: 3rem">Powered By <a href="http://localhost/index">一诺科技有限公司</a><br> 鲁鲁奴农品商城 © 2017</p>
        <hr>
    </div>
</footer>
<script src="http://localhost/Public/static/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
   <script>
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
    </script>
</body>
</html>