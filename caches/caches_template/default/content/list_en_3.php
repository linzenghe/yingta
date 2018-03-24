<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>
<?php include template("content","header_en_part"); ?>
    <div class="banner">
        <img src="<?php echo IMG_PATH;?>news_banner.jpg" width="100%">
    </div>
    <section class="news_section">
        <div class="container">
            <div class="section_title text-center">
                <h3>en新闻与事件</h3>
                <p>News center</p>
                <div class="line"></div>
            </div>
            <div class="news_list">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c0b53f306c96d87208ed6f069d0ac0fb&action=lists&catid=%24catid&order=id+DESC&num=6&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$wz_pages = wz_pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <a href="<?php echo $v['url'];?>" class="news_item clearfix">
                    <span class="item_date">
                        <span><?php echo date('y-m-d',$v[inputtime]);?></span>
                    </span>
                    <span class="item_image">
                        <img src="<?php echo $v['aboutpic'];?>">
                    </span>
                    <span class="item_text">
                        <span class="item_name"><?php echo $v['title'];?></span>
                        <span class="item_des">
                            <?php echo $v['description'];?>...
                        </span>
                    </span>
                    <i class="icon icon-you more_icon"></i>
                </a>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <!--分页-->
            <div class="newPage text-center">
                <ul class="pagination" id="pages">
                    <?php echo $wz_pages;?>
                </ul>
            </div>

        </div>
    </section>


<?php include template("content","footer_en_part"); ?>
<?php include template("content","footer_en"); ?>