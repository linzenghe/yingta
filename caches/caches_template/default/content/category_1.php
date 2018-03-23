<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php include template("content","header_part"); ?>
    <div class="banner about_banner">
        <img src="<?php echo IMG_PATH;?>about_banner.jpg" width="100%">
    </div>

    <section class="about_section">
        <div class="container">
            <div class="about_item">
                <div class="section_title text-center">
                    <h3>关于赢他</h3>
                    <p>about us</p>
                    <div class="line"></div>
                </div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=09e68b1f9e96fa05914a9d06b3375de8&sql=SELECT+%2A+FROM+yt_piccon_data+WHERE+id%3D%272%27&catid=%24catid&cache=3600&moreinfo=1&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM yt_piccon_data WHERE id=\'2\'','catid'=>$catid,'moreinfo'=>'1',)).'09e68b1f9e96fa05914a9d06b3375de8');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM yt_piccon_data WHERE id='2' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                                       <div class="img-wrapper"><img src="static/images/culture/WH-1.jpg" width="100%"></div>
                                       <h3>十年如一日</h3>
                                       <p>勤奋、务实、上进</p>
                                   </a>
                               </li>
                                <li>
                                    <a>
                                        <div class="img-wrapper"><img src="static/images/culture/WH-2.jpg" width="100%"></div>
                                        <h3>满满正能量</h3>
                                        <p>仁爱、公平、正义</p>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <div class="img-wrapper"><img src="static/images/culture/WH-3.jpg" width="100%"></div>
                                        <h3>前沿高科技</h3>
                                        <p>求是、批判、创新</p>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <div class="img-wrapper"><img src="static/images/culture/WH-4.jpg" width="100%"></div>
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
                        <li>
                            <a href="#2005">2005</a>
                        </li>
                        <li>
                            <a href="#2006">2006</a>
                        </li>
                        <li>
                            <a href="#2007">2007</a>
                        </li>
                        <li>
                            <a href="#2008">2008</a>
                        </li>
                        <li>
                            <a href="#2009">2009</a>
                        </li>
                        <li>
                            <a href="#2010">2010</a>
                        </li>
                        <li>
                            <a href="#2011">2011</a>
                        </li>
                        <li>
                            <a href="#2012">2012</a>
                        </li>
                    </ul>
                    <ul id="issues">
                        <li id="2005">
                            <img src="static/images/develop_img.png">
                            <div>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                            </div>
                        </li>
                        <li id="2006">
                            <img src="static/images/develop_img.png">
                            <div>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                            </div>
                        </li>
                        <li id="2007">
                            <img src="static/images/develop_img.png">
                            <div>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                            </div>
                        </li>
                        <li id="2008">
                            <img src="static/images/develop_img.png">
                            <div>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                            </div>
                        </li>
                        <li id="2009">
                            <img src="static/images/develop_img.png">
                            <div>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                            </div>
                        </li>
                        <li id="2010">
                            <img src="static/images/develop_img.png">
                            <div>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                            </div>
                        </li>
                        <li id="2011">
                            <img src="static/images/develop_img.png">
                            <div>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                            </div>
                        </li>
                        <li id="2012">
                            <img src="static/images/develop_img.png">
                            <div>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                                <p>上海赢他科技有限公司注册成立；</p>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- optional -->
                <a class="prev" id="prev"><i class="icon icon-shang"></i></a>
                <a class="next" id="next"><i class="icon icon-xia"></i></a>
            </div>
        </div>
    </section>
<?php include template("content","footer_part"); ?>
<!--时间轴-->
    <script src="<?php echo JS_PATH;?>lib/timelinr/jquery.timelinr-0.9.53.js"></script>

    <!--企业文化轮播-->
    <script src="<?php echo JS_PATH;?>lib/rvc/rvc.js"></script>
    <script type="text/javascript">
        $(function () {
            /*时间轴*/
            $('#timeline').timelinr({
                orientation: 'vertical',
                issuesSpeed: 300,
                datesSpeed: 100,
                arrowKeys: 'true',
                startAt: 3
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
<?php include template("content","footer"); ?>