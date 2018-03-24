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
