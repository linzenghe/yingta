<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>
<?php include template("content","header_en_part"); ?>
    <div class="banner">
        <img src="<?php echo IMG_PATH;?>buz_banner.jpg" width="100%">
    </div>
    <section class="buz_section">
        <div class="container">
            <div class="section_title text-center">
                <h3>en我们的业务</h3>
                <p>our business</p>
                <div class="line"></div>
            </div>
            <div class="buz_list">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1073d9fc77d746935104c57024f9f10a&action=lists&catid=%24catid&order=id+DESC&num=10&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>'10',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <div class="buz_item">
                    <div class="buz_img">
                        <img src="<?php echo $v['aboutpic'];?>" width="100%">
                    </div>
                    <div class="buz_footer text-center">
                        <p><?php echo $v['content'];?></p>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </section>
<?php include template("content","footer_en_part"); ?>
<?php include template("content","footer_en"); ?>