<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php include template("content","header_part"); ?>



<?php include template("content","footer_part"); ?>
<script type="text/javascript">
    $(function(){
        $('#myCarousel').carousel({
            interval: 5000
        });
        $('.carousel-indicators li:first-child').addClass('active');
    })
</script>
<?php include template("content","footer"); ?>