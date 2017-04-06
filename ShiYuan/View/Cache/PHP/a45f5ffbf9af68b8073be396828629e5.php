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
    <h1>会员等级</h1>
    <table class="table">
        <legend>会员等级说明</legend>
        <thead>
        <tr>
            <th>等级</th>
            <th>积分</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>初级会员</td>
            <td>1-999</td>

        </tr>
        <tr>
            <td>黄金会员</td>
            <td>1000-999999</td>

        </tr>
        <tr>
            <td>白金会员</td>
            <td>1000000-99999999</td>

        </tr>
        <tr >
            <td>砖石会员</td>
            <td>100000000-99999999999</td>

        </tr>
        </tbody>
    </table>
    <table class="table">
        <thead>
        <tr>
            <th>等级</th>
            <th>权益</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>初级会员</td>
            <td>可加入宣传本站获取收益</td>

        </tr>
        <tr>
            <td>黄金会员</td>
            <td>享受九点九折购物优惠</td>

        </tr>
        <tr>
            <td>白金会员</td>
            <td>每天有一次参加比赛的机会</td>

        </tr>
        <tr>
            <td>砖石会员</td>
            <td>每天享有一次抽奖的机会</td>

        </tr>
        </tbody>
    </table>

    <div class="text-center"><a href="http://localhost/member/index">返回</a> </div>


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

