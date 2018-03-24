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
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=13e8a9cbdf1f801299062f9710a4ceae&action=category&catid=%24parentid&catid=6&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'6','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                        <li <?php if(empty($catid)) { ?>class="active"<?php } ?>><a href="<?php echo siteurl($siteid);?>"><span data-title="首页">首页</span></a></li>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li <?php if($r[catid]==$catid) { ?>class="active" <?php } ?>><a href="<?php echo $r['url'];?>"><span data-title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></span></a></li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        <li class="language">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                                <img src="<?php echo IMG_PATH;?>chinese.svg">
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo $CATEGORYS['6']['url'];?>"><img src="<?php echo IMG_PATH;?>chinese.svg"></a></li>
                                <li><a href="<?php echo $CATEGORYS['20']['url'];?>"><img src="<?php echo IMG_PATH;?>english.svg"></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>