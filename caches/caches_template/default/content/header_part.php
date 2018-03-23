<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?></head>
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
                    <a class="navbar-brand" href="">
                        <img alt="Modus" src="<?php echo IMG_PATH;?>logo.png">
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="main-navbar" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=348a36377ba1c0aa8a5016175db202e5&action=category&catid=6&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'6','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                        <li <?php if(empty($catid)) { ?>class="active"<?php } ?>><a href="<?php echo siteurl($siteid);?>"><span data-title="首页">首页</span></a></li>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a <?php if($r['catid'] == $catid || $CATEGORYS[$CAT[parentid]][catid]==$r['catid']) { ?>class="active" <?php } ?> href="<?php echo $r['url'];?>"><span data-title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></span></a></li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

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