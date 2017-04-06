<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title><?php echo $Title; ?></title>
    <link href="http://localhost/Public/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/Public/static/css/shoping.css" rel="stylesheet">
    <style>
        a:hover
        {
            opacity: 0.6;
        }
    </style>
    <script src="http://localhost/Public/static/js/jquery.min.js"></script>
    <script src="http://localhost/Public/static/js/bootstrap.min.js"></script>
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

<div class="text-center label-warning">
    <img  src="http://localhost/Public/static/images/b.jpg" class="img-circle" style="height: 128px;width: 128px">
</div>

<div class="container">
<div class="row">
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title">我的账户</h3>
        </div>
        <div class="panel-body" style="font-size: 1.5rem">
            <a href="http://localhost/member/accountlevel" >会员等级</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
            <hr>
            <a href="#" >修改信息</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
            <hr>
            <a href="#" >修改密码</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
            <hr>
            <a href="#" >收货地址</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
            <hr>
            <a href="#" >收藏商品</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
        </div>
    </div>
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title">我的订单</h3>
        </div>
        <div class="panel-body" style="font-size: 1.5rem">
            <a href="#" >等待付款</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
            <hr>
            <a href="#" >订单管理</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
            <hr>
            <a href="#" >订单历史</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
            <hr>
            <a href="#" >预售订单</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
            <hr>
            <a href="#" >团购订单</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
        </div>
    </div>


    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title">我的业绩</h3>
        </div>
        <div class="panel-body" style="font-size: 1.5rem">
            <a href="#" >销售链接</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
            <hr>
            <a href="#" >销售级别</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
            <hr>
            <a href="#" >销售订单</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
        </div>
    </div>
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title">客户服务</h3>
        </div>
        <div class="panel-body" style="font-size: 1.5rem">
            <a href="#" >退换货记录</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
            <hr>
            <a href="#" >意见建议</a>
            <span class="glyphicon glyphicon-chevron-right pull-right" ></span>
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
</body>
</html>