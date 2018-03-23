<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">

    <link rel="stylesheet" href="<?php echo CSS_PATH;?>bootstrap.min.css" >
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>fonts/iconfont.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style.css">

    <!--相册-->
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>justifiedgallery.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>swipebox.css">

    <script src="<?php echo JS_PATH;?>jquery.min.js"></script>
    <script src="<?php echo JS_PATH;?>bootstrap.min.js"></script>
</head>
<body>
	<header id="header">
		<h1 class="sr-only">Modus | Home page</h1>
		<nav class="navbar navbar-default navbar-fixed-top">
            <h1 class="sr-only">Main navigation</h1>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo APP_PATH;?>">
                        <img alt="Modus" src="<?php echo IMG_PATH;?>logo.png">
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="main-navbar" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo APP_PATH;?>"><span data-title="首页">首页</span></a></li>
                        <li><a href="about.html"><span data-title="关于赢他">关于赢他</span></a></li>
                        <li><a href="buz.html"><span data-title="公司业务">公司业务</span></a></li>
                        <li><a href="news.html"><span data-title="新闻中心">新闻中心</span></a></li>
                        <li><a href="photo.html"><span data-title="公司相册">公司相册</span></a></li>
                        <li><a href="join.html"><span data-title="加入我们">加入我们</span></a></li>
                        <li><a href="relation.html"><span data-title="联系我们">联系我们</span></a></li>
                        <li class="language">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                                <img src="<?php echo IMG_PATH;?>chinese.svg">
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href=""><img src="<?php echo IMG_PATH;?>chinese.svg"></a></li>
                                <li><a href=""><img src="<?php echo IMG_PATH;?>english.svg"></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
		</nav>
	</header>

