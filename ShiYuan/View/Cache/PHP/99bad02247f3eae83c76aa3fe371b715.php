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
        <br>
        <div class="col-xs-12">
        <form class="form-horizontal" id="signupForm" method="post" action="http://localhost/member/verifyLogin">

            <div class="form-group">
                <div class="input-group input-group-lg">
                    <div class="input-group-addon">
                        <span  style="color: rgb(255, 140, 60);" class="glyphicon glyphicon-user"></span>
                    </div>
                    <input class="form-control" name="username" id="username" placeholder="用户名" type="text">
                </div>
            </div>
            <i></i>
            <div class="form-group">

                <div class="input-group input-group-lg">
                    <div class="input-group-addon">
                        <span style="color: rgb(255, 140, 60);"  class="glyphicon glyphicon-lock"></span>
                    </div>

                    <input class="form-control" name="password" id="password" placeholder="密码" type="password">
                </div>
            </div>
            <i></i>

            <div class="form-group">

                <div class="input-group input-group-lg" >
                    <div class="input-group-addon">
                        <span>验证码</span>
                    </div>
                    <input class="form-control" name="verifycode" id="verifycode" placeholder="验证码"  type="text">

                </div>


            </div>

            <i></i>

            <div><img id="updatecode"  src="http://localhost/member/code"/>点击图片刷新</div>
            <br>
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <label  >如果你不是本站会员，<a href="http://localhost/member/register">注册</a>一个账户更方便</label>
            <br>
            <label  ><a href="#">忘记密码</a></label>
            <div class="form-group">
                <button type="button"  class="btn btn-danger btn-lg btn-block" id="subform">登陆</button>
            </div>
        </form>
        </div>
    </div>
</div>
<footer style="width: 100%;background-color:#303030; margin-top: 1rem;padding-top: 30px;color:#fff">
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <h5>网超信息</h5>
                <ul class="list-unstyled">
                    <li><a href="#">关于我们</a></li>
                    <li><a href="#">物流配送</a></li>
                    <li><a href="#">隐私政策</a></li>
                    <li><a href="#">使用条款</a></li>
                </ul>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <h5>会员服务</h5>
                <ul class="list-unstyled">
                    <li><a href="#">联系我们</a></li>
                    <li><a href="#">网站地图</a></li>
                    <li><a href="#">推广会员</a></li>
                    <li><a href="#">优惠商品</a></li>
                </ul>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
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
<script>
    $().ready(function() {

        $('#updatecode').click(function () {
            this.src = "http://localhost/member/code/" + Math.random();
        });
        $('#subform').click(function(){
            var username=$('#username').val();
            var password=$('#password').val();
            var verifycode=$('#verifycode').val();
            if (username.length<6)
            {
                $("i:eq(0)").html("用户名不小于6位");
                return false;
            }
            if (password.length<6)
            {
                $("i:eq(1)").html("密码不小于6位");
                return false;
            }
            if (verifycode.length<4)
            {
                $("i:eq(2)").html("验证码不小于4位");
                return false;
            }
            else
            {
                $.ajax
                ({
                    url: "http://localhost/member/verifyCode",
                    type: "post",
                    dataType: "json",
                    data:{"verifycode":verifycode},
                    error: function()
                    {
                        $("i:eq(2)").html("验证出现问题请稍候再试");
                        return false;
                    },
                    success: function (result)
                    {
                        alert(result);
                        if (result=='true')
                        {
                            $('form').submit();
                        }
                        else
                        {
                            $('#updatecode').attr('src',"http://localhost/member/code/"+ Math.random());
                            $("i:eq(2)").html("验证码不正确");

                            return false;
                        }
                    }
                });
            }
        });

        $('#username').focus(function ()
        {
            $("i:eq(0)").html("");
        });
        $('#password').focus(function ()
        {
            $("i:eq(1)").html("");
        });
        $('#verifycode').focus(function ()
        {
            $("i:eq(2)").html("");
        });
    });
</script>
</body>
</html>


