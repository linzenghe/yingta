<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>
<?php include template("content","header_en_part"); ?>
<div class="banner">
    <img src="<?php echo IMG_PATH;?>photo_banner.jpg" width="100%">
</div>
<section class="photo_section">
    <div class="container">
        <div class="section_title text-center">
            <h3>en公司相册</h3>
            <p>Company album</p>
            <div class="line"></div>
        </div>
        <div class="photo_nav text-center">
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=176185cc777c632f2b6263f0069a536b&action=lists&catid=%24catid&num=20&order=id+ASC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$wz_pages = wz_pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        	<a href="<?php echo $r['url'];?>"><span <?php if($r[id]==$id) { ?>class="current"<?php } ?>><?php echo $r['title'];?></span></a>
        	<?php $n++;}unset($n); ?>
        	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="swipeboxEx justified-gallery">
        	<?php $n=1; if(is_array($morepic)) foreach($morepic AS $pic_k => $r) { ?>
            <a href="<?php echo $r['url'];?>" title="<?php echo $r['alt'];?>">
                <img src="<?php echo $r['url'];?>"/>
            </a>
            <?php $n++;}unset($n); ?>
        </div>
    </div>
</section>
<?php include template("content","footer_en_part"); ?>
<script src="<?php echo JS_PATH;?>lib/photo/justifiedgallery.js"></script>
<script src="<?php echo JS_PATH;?>lib/photo/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.photo_section .photo_nav span').on('click',function () {
            $(this).addClass('current').siblings().removeClass('current');
        });

        $('.swipeboxEx').each(function (i, el) {
            $(el).justifiedGallery({rel: 'gal' + i}).on('jg.complete', function () {
                if (i == 0) $('.swipeboxEx a').swipebox();   //如果有多个相册改变i的值
            });
        });
    });
</script>
<?php include template("content","footer_en"); ?>