<<<<<<< HEAD
<<<<<<< HEAD
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edga">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/newsMain">
    <!-- 使IE9以下的浏览器支持HTML5新标签和媒体查询 -->
    <!--[if lt IE 9]>
    <script src="./js/html5shiv.js"></script>
    <script src="./js/respond.js"></script>
    <![endif]-->
    <script src="js/jquery-1.8.3.js"></script>
    <script>
        $(window).scroll(function(){
            var top=$(window).scrollTop()+'px';
            console.log(top);
            $('.side-left>.list-group').css("top",top);
        });
        $(function(){
            //导航栏点击事件
//            $('my-nav>li').click(function () {
            $('.my-nav>li').click(function(){
                console.log($(this));
                $('.my-nav>li').removeClass("active");
                $(this).addClass("active");
            });

            //左边栏点击事件
            $('.side-left>.list-group>.list-group-item').click(function(){
                $('.side-left>.list-group>.list-group-item').removeClass("active");
                $(this).addClass("active");
            })
        });
    </script>
</head>
<body>

<!--导航条-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                <img src="" alt="logo">
            </a>
            <button class="navbar-toggle" data-toggle="collapse" data-target="#my-collapse">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="my-collapse">
            <ul class="nav navbar-nav my-nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#">国内</a></li>
                <li><a href="#">国际</a></li>
                <li><a href="#">社会</a></li>
                <li><a href="#">数读</a></li>
                <li><a href="#">军事</a></li>
                <li><a href="#">政务</a></li>
                <li><a href="#">公益</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li><a href="login.html">' . $_SESSION["user"] . '</a></li><li><a href="login.html">退出</a></li>';
                } else {
                    echo '<li><a href="login.php">登录</a></li><li><a href="login.html">注册</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!--导航条结束-->
<div class="container">
    <div class="row">
        <!--左侧导航-->
        <div class="col-md-2 side-left">
            <div class="list-group">
                <a class="list-group-item active" href="#">全部</a>
                <a class="list-group-item" href="#">电影</a>
                <a class="list-group-item" href="#">电视剧</a>
                <a class="list-group-item" href="#">音乐</a>
                <a class="list-group-item" href="#">社会</a>
                <a class="list-group-item" href="#">社会</a>
            </div>
        </div>
        <!--左侧导航结束-->
        <!--中间内容部分-->
        <div class="col-sm-7">
            <div class="news-list">
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>

        </div>

        <!--中间内容部分结束-->
        <!--右侧-->
        <div class="col-sm-3 side-right">
            <div class="search-bar">
                <input type="search" class="form-control" placeholder="搜索">
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <h3>24小时热闻</h3>
                </div>
                <div class="panel-body">
                    <div class="list">
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--右侧结束-->

    </div>

</div>
<footer>
    <p> &copy; 2017 每日新闻 </p>
    <p>CRATE BY PBMORE</p>
</footer>
</body>
=======
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edga">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/newsMain">
    <!-- 使IE9以下的浏览器支持HTML5新标签和媒体查询 -->
    <!--[if lt IE 9]>
    <script src="./js/html5shiv.js"></script>
    <script src="./js/respond.js"></script>
    <![endif]-->
    <script src="js/jquery-1.8.3.js"></script>
    <script>
        $(window).scroll(function(){
            var top=$(window).scrollTop()+'px';
            console.log(top);
            $('.side-left>.list-group').css("top",top);
        });
        $(function(){
            //导航栏点击事件
//            $('my-nav>li').click(function () {
            $('.my-nav>li').click(function(){
                console.log($(this));
                $('.my-nav>li').removeClass("active");
                $(this).addClass("active");
            });

            //左边栏点击事件
            $('.side-left>.list-group>.list-group-item').click(function(){
                $('.side-left>.list-group>.list-group-item').removeClass("active");
                $(this).addClass("active");
            })
        });
    </script>
</head>
<body>

<!--导航条-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                <img src="" alt="logo">
            </a>
            <button class="navbar-toggle" data-toggle="collapse" data-target="#my-collapse">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="my-collapse">
            <ul class="nav navbar-nav my-nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#">国内</a></li>
                <li><a href="#">国际</a></li>
                <li><a href="#">社会</a></li>
                <li><a href="#">数读</a></li>
                <li><a href="#">军事</a></li>
                <li><a href="#">政务</a></li>
                <li><a href="#">公益</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li><a href="login.html">' . $_SESSION["user"] . '</a></li><li><a href="login.html">退出</a></li>';
                } else {
                    echo '<li><a href="login.php">登录</a></li><li><a href="login.html">注册</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!--导航条结束-->
<div class="container">
    <div class="row">
        <!--左侧导航-->
        <div class="col-md-2 side-left">
            <div class="list-group">
                <a class="list-group-item active" href="#">全部</a>
                <a class="list-group-item" href="#">电影</a>
                <a class="list-group-item" href="#">电视剧</a>
                <a class="list-group-item" href="#">音乐</a>
                <a class="list-group-item" href="#">社会</a>
                <a class="list-group-item" href="#">社会</a>
            </div>
        </div>
        <!--左侧导航结束-->
        <!--中间内容部分-->
        <div class="col-sm-7">
            <div class="news-list">
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>

        </div>

        <!--中间内容部分结束-->
        <!--右侧-->
        <div class="col-sm-3 side-right">
            <div class="search-bar">
                <input type="search" class="form-control" placeholder="搜索">
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <h3>24小时热闻</h3>
                </div>
                <div class="panel-body">
                    <div class="list">
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--右侧结束-->

    </div>

</div>
<footer>
    <p> &copy; 2017 每日新闻 </p>
    <p>CRATE BY PBMORE</p>
</footer>
</body>
>>>>>>> 57a51368ee2ff691d3a73b6b75fbcfbee5cf6dfb
=======
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edga">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/newsMain">
    <!-- 使IE9以下的浏览器支持HTML5新标签和媒体查询 -->
    <!--[if lt IE 9]>
    <script src="./js/html5shiv.js"></script>
    <script src="./js/respond.js"></script>
    <![endif]-->
    <script src="js/jquery-1.8.3.js"></script>
    <script>
        $(window).scroll(function(){
            var top=$(window).scrollTop()+'px';
            console.log(top);
            $('.side-left>.list-group').css("top",top);
        });
        $(function(){
            //导航栏点击事件
//            $('my-nav>li').click(function () {
            $('.my-nav>li').click(function(){
                console.log($(this));
                $('.my-nav>li').removeClass("active");
                $(this).addClass("active");
            });

            //左边栏点击事件
            $('.side-left>.list-group>.list-group-item').click(function(){
                $('.side-left>.list-group>.list-group-item').removeClass("active");
                $(this).addClass("active");
            })
        });
    </script>
</head>
<body>

<!--导航条-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                <img src="" alt="logo">
            </a>
            <button class="navbar-toggle" data-toggle="collapse" data-target="#my-collapse">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="my-collapse">
            <ul class="nav navbar-nav my-nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#">国内</a></li>
                <li><a href="#">国际</a></li>
                <li><a href="#">社会</a></li>
                <li><a href="#">数读</a></li>
                <li><a href="#">军事</a></li>
                <li><a href="#">政务</a></li>
                <li><a href="#">公益</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li><a href="login.html">' . $_SESSION["user"] . '</a></li><li><a href="login.html">退出</a></li>';
                } else {
                    echo '<li><a href="login.php">登录</a></li><li><a href="login.html">注册</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!--导航条结束-->
<div class="container">
    <div class="row">
        <!--左侧导航-->
        <div class="col-md-2 side-left">
            <div class="list-group">
                <a class="list-group-item active" href="#">全部</a>
                <a class="list-group-item" href="#">电影</a>
                <a class="list-group-item" href="#">电视剧</a>
                <a class="list-group-item" href="#">音乐</a>
                <a class="list-group-item" href="#">社会</a>
                <a class="list-group-item" href="#">社会</a>
            </div>
        </div>
        <!--左侧导航结束-->
        <!--中间内容部分-->
        <div class="col-sm-7">
            <div class="news-list">
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="news-list-item">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="img/1.jpg" alt="news">
                        </div>
                        <div class="col-xs-8">
                            <a class="title" href="#">
                                新Surface Pro 发布，Surface全系入华，四件套不到10万元
                            </a>
                            <div class="info">
                                <span>呜呜呜</span> ·
                                <span>25k评论</span> ·
                                <span>10分钟前</span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>

        </div>

        <!--中间内容部分结束-->
        <!--右侧-->
        <div class="col-sm-3 side-right">
            <div class="search-bar">
                <input type="search" class="form-control" placeholder="搜索">
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <h3>24小时热闻</h3>
                </div>
                <div class="panel-body">
                    <div class="list">
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">日方否认"间谍" 辩称受中国公司委托进行地质勘探</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">万万没想到，这两个国家在南海冲突起来了！</a>
                        </div>
                        <div class="list-item">
                            <a href="# ">等了122天，习近平的“故知”终于要来北京啦</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--右侧结束-->

    </div>

</div>
<footer>
    <p> &copy; 2017 每日新闻 </p>
    <p>CRATE BY PBMORE</p>
</footer>
</body>
>>>>>>> 57a51368ee2ff691d3a73b6b75fbcfbee5cf6dfb
</html>