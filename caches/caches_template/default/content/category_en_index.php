<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>
<?php include template("content","header_en_part"); ?>
<div class="banner">
        <div id="myCarousel" class="carousel slide" data-pause="none">
            <ol class="carousel-indicators">
            	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a6cc5426358a6df7b19e10351f9641ea&sql=SELECT+%2A+FROM+phpcms_poster+WHERE+spaceid+%3D+12+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM phpcms_poster WHERE spaceid = 12 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
            	<?php $j=0;?>
                	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                   <?php
                   $arr= (array)json_decode($r['setting']);
                   foreach ($arr as $key => $val){
                            $imageurl = $val->imageurl;
                            $linkurl = $val->linkurl;
                            $alt = $val->alt;
                      }
                   ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $j;?>"></li>
                <?php $j++; ?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
            	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a6cc5426358a6df7b19e10351f9641ea&sql=SELECT+%2A+FROM+phpcms_poster+WHERE+spaceid+%3D+12+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM phpcms_poster WHERE spaceid = 12 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                   <?php
                   $arr= (array)json_decode($r['setting']);
                   foreach ($arr as $key => $val){
                            $imageurl = $val->imageurl;
                            $linkurl = $val->linkurl;
                            $alt = $val->alt;
                      }
                   ?>
                <div class="item">
                    <img src="<?php echo $imageurl; ?>" alt="<?php echo $r['name'];?>" width="100%">
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="icon icon-zuo"></i></a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="icon icon-you"></i></a>
        </div>
    </div>
    <!--新闻-->
    <section class="section_news">
        <div class="container">
            <div class="section_title text-center">
                <h3>新闻与事件</h3>
                <p>news center</p>
                <div class="line"></div>
            </div>
            <div class="row news_item">
                <div class="col-xs-12 col-sm-5 news_right pull-right">
                    <div class="text-right">
                        <img src="<?php echo IMG_PATH;?>index_news.jpg">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 news_left pull-left">
                    <div class="item">
                        <ul>
                        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=82e08bb8ed207cef3ef3a830f56c14fd&action=lists&catid=25&order=id+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','order'=>'id DESC','limit'=>'8',));}?>
                        	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li class="clearfix">
                                <a class="text col-xs-8" href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
                                <span class="time col-xs-4 text-right"><?php echo date('Y/n/d',$r[inputtime]);?></span>
                            </li>
                        	<?php if($n==4) { ?></ul><hr><ul><?php } ?>
                        	<?php $n++;}unset($n); ?>
                        	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                        <div class="more">
                            <a href="<?php echo $CATEGORYS['11']['url'];?>">MORE<i class="icon icon-you"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section_intro">
        <div class="container">
            <div class="intro_item clearfix">
            	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9e180a652437bf9666283e343c1f34de&sql=SELECT+%2A+FROM+yt_piccon_data+WHERE+id%3D%2717%27&cache=3600&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM yt_piccon_data WHERE id=\'17\'',)).'9e180a652437bf9666283e343c1f34de');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM yt_piccon_data WHERE id='17' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                <div class="col-sm-5">
                    <img src="<?php echo $val['aboutpic'];?>" width="100%">
                </div>
                <div class="col-sm-7">
                    <div class="title">
                        <h3>公司简介</h3>
                        <span>COMPANY PROFILE</span>
                        <div class="line"></div>
                    </div>
                    <div class="into_txt">
                        <?php echo str_cut(strip_tags($val[content]),780);?>
                    </div>
                    <div class="more text-right">
                        <a href="<?php echo $CATEGORYS['7']['url'];?>">MORE<i class="icon icon-you"></i></a>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </section>
    <!--加入我们-->
    <section class="section_join">
        <div class="container">
            <div class="row join_item">
                <div class="col-sm-6">
                    <div class="title">
                        <h3>加入我们</h3>
                        <span>join us</span>
                        <div class="line"></div>
                    </div>
                    <p class="join_info"><?php echo $CATEGORYS['27']['description'];?></p>
                    <p class="join_info">同时欢迎各界供销商加入我们</p>
                    <div class="more">
                        <a href="<?php echo $CATEGORYS['18']['url'];?>">MORE<i class="icon icon-you"></i></a>
                    </div>
                    <h2 class="sign">以人为本，共创共赢</h2>
                </div>
                <div class="col-sm-6 join_right text-right">
                    <a href="/join"><img src="<?php echo IMG_PATH;?>join_sign.png"></a>
                </div>
            </div>
        </div>
    </section>


<?php include template("content","footer_en_part"); ?>
<script type="text/javascript">
    $(function(){
        $('#myCarousel').carousel({
            interval: 5000
        });
        
        $('#myCarousel .item').eq(0).addClass('active');
        $('.carousel-indicators li:first-child').addClass('active');
    })
</script>
<?php include template("content","footer_en"); ?>