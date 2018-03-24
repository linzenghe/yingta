<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php include template("content","header_part"); ?>
<div class="banner">
    <img src="<?php echo IMG_PATH;?>join_banner.jpg" width="100%">
</div>
<section class="join_section">
    <div class="container">
        <div class="section_title text-center">
            <h3>加入我们</h3>
            <p>join us</p>
            <div class="line"></div>
        </div>
        <div class="join_text text-center">
            <p class="join_h">以人为本，共创多赢！</p>
            <p class="join_b">企业的发展有赖于优秀人才的加入。为了提高公司的人才素质，公司与多所高校合作，免费为员工提供外贸电子商务的理论培训、实践以及员工的职场心理培训。 目前已经在江西外语外贸职业学院，江苏经贸职业技术学院等建立"实习实训基地"。 公司拥有完善的新人培训体系和业绩考核体系，为员工提供实现自我价值和提升自我才能的平台。</p>
            <p class="join_f">想加入一个更加有前途、有发展的团队，赢他科技将是你的最佳选择！</p>
        </div>
        <div class="job_list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1073d9fc77d746935104c57024f9f10a&action=lists&catid=%24catid&order=id+DESC&num=10&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>'10',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <div class="job_item">
                <div class="title"><?php echo $v['title'];?></div>
                <div class="attribute clearfix">
                    <div class="col-xs-4 col-sm-3">工作地点：<?php echo $v['workplace'];?></div>
                    <div class="col-xs-4 col-sm-3">薪金待遇：<?php echo $v['reward'];?></div>
                </div>
                <div class="field">
                    <?php echo $v['content'];?>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</section>
<?php include template("content","footer_part"); ?>
<?php include template("content","footer"); ?>