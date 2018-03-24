<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>
<?php include template("content","header_en_part"); ?>

<section class="detail_section">
    <div class="container">
        <article class="news_detail">
            <h3 class="title text-center"><?php echo $title;?></h3>
            <div class="data"><?php echo date('y-m-d',strtotime($updatetime));?></div>
            <div class="line"></div>
            <div class="body">
                <?php echo $content;?>
            </div>
        </article>
    </div>
</section>

<?php include template("content","footer_en_part"); ?>
<script type="text/javascript">
    $(function () {
        loadH();
        $(window).resize(function () {
            loadH();
        })
    });
    function loadH() {
        var winH=$(window).height();
        var bodyH=$('html').height();
        var artH=$('.news_detail').height();
        console.log(winH,bodyH,artH);
        if(winH-artH>0){
            var H=winH-bodyH;
            $('.news_detail').css({'min-height':artH+H});
        }
    }
</script>
<?php include template("content","footer_en"); ?>