<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>
<?php include template("content","header_en_part"); ?>
    <div class="banner about_banner">
        <img src="<?php echo IMG_PATH;?>about_banner.jpg" width="100%">
    </div>

    <section class="about_section">
        <div class="container">
            <div class="about_item">
                <div class="section_title text-center">
                    <h3>en关于赢他</h3>
                    <p>about us</p>
                    <div class="line"></div>
                </div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a1810a582cf79ec60f778c2f7222699f&sql=SELECT+%2A+FROM+yt_piccon_data+WHERE+id%3D%2717%27&catid=%24catid&cache=3600&moreinfo=1&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM yt_piccon_data WHERE id=\'17\'','catid'=>$catid,'moreinfo'=>'1',)).'a1810a582cf79ec60f778c2f7222699f');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM yt_piccon_data WHERE id='17' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                <div class="row">
                    <div class="col-sm-5 company_pic">
                        <img src="<?php echo $val['aboutpic'];?>">
                    </div>
                    <div class="col-sm-7">
                        <p class="about_txt">
                            <?php echo $val['content'];?>
                        </p>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="culture_item">
                <div class="section_title text-center">
                    <h3>企业文化</h3>
                    <p>Culture</p>
                    <div class="line"></div>
                </div>
                <div class="culture_box">
                    <div class="rvc" id="rvc1">
                        <div class="rvc-wrapper">
                            <ul>
                               <li>
                                   <a>
                                       <div class="img-wrapper"><img src="<?php echo IMG_PATH;?>culture/WH-1.jpg" width="100%"></div>
                                       <h3>十年如一日</h3>
                                       <p>勤奋、务实、上进</p>
                                   </a>
                               </li>
                                <li>
                                    <a>
                                        <div class="img-wrapper"><img src="<?php echo IMG_PATH;?>culture/WH-2.jpg" width="100%"></div>
                                        <h3>满满正能量</h3>
                                        <p>仁爱、公平、正义</p>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <div class="img-wrapper"><img src="<?php echo IMG_PATH;?>culture/WH-3.jpg" width="100%"></div>
                                        <h3>前沿高科技</h3>
                                        <p>求是、批判、创新</p>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <div class="img-wrapper"><img src="<?php echo IMG_PATH;?>culture/WH-4.jpg" width="100%"></div>
                                        <h3>树企业形象</h3>
                                        <p>安全、优质、效益</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="rvc-prv">
                            <i class="icon icon-zuo"></i>
                        </div>
                        <div class="rvc-next">
                            <i class="icon icon-you"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dev_section">
        <div class="container">
            <div class="section_title text-center">
                <h3>发展历程</h3>
                <p>development</p>
                <div class="line"></div>
            </div>
        </div>
    </section>
    <section class="time_section">
        <div class="container">
            <div class="time_main">
                <div id="timeline">
                    <ul id="dates">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d8eee684b1c310bfeeba7be2447a7a1&action=lists&catid=23&num=30&order=id+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'23','order'=>'id ASC','moreinfo'=>'1','limit'=>'30',));}?>
                        <?php $j=1;?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                        <li>
                            <a href="#<?php echo $j;?>"><?php echo $val['title'];?></a>
                        </li>
                        <?php $j++?>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                    <ul id="issues">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d8eee684b1c310bfeeba7be2447a7a1&action=lists&catid=23&num=30&order=id+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'23','order'=>'id ASC','moreinfo'=>'1','limit'=>'30',));}?>
                        <?php $j=1;?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                        <li id="<?php echo $j;?>" data="$data">
                            <img src="<?php echo $val['aboutpic'];?>">
                            <div>
                                <?php echo $val['content'];?>
                            </div>
                        </li>
                        <?php $j++?>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>

                </div>
                <!-- optional -->
                <a class="prev" id="prev"><i class="icon icon-shang"></i></a>
                <a class="next" id="next"><i class="icon icon-xia"></i></a>
            </div>
        </div>
    </section>
<?php include template("content","footer_en_part"); ?>
<!--时间轴-->
    <script src="<?php echo JS_PATH;?>lib/timelinr/jquery.timelinr-0.9.53.js"></script>

    <!--企业文化轮播-->
    <script src="<?php echo JS_PATH;?>lib/rvc/rvc.js"></script>
    <script type="text/javascript">
        $(function () {
            /*时间轴*/
            var linum=1;
            linum = $("#dates li").length;
            $('#timeline').timelinr({
                orientation: 'vertical',
                issuesSpeed: 300,
                datesSpeed: 100,
                arrowKeys: 'true',
                startAt: linum
            });

            $('#rvc1').rvc({
                liNum: 4,//2~5之间的整数
                spaceBetween: 30,//li项之间的距离
                plr: 20,//当屏幕小于1024时，rvc的padding-left，padding-right值
                time: 400,//动画时间
                prv: '.rvc-prv',//前一个按钮
                next: '.rvc-next'//下一个按钮
            })
        })
    </script>
<?php include template("content","footer_en"); ?>