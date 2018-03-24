<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>
<?php include template("content","header_en_part"); ?>
<div class="banner">
        <img src="<?php echo IMG_PATH;?>relation_banner.jpg" width="100%">
    </div>
    <section class="join_section">
        <div class="container">
            <div class="section_title text-center">
                <h3>en联系我们</h3>
                <p>relation us</p>
                <div class="line"></div>
            </div>
            <div class="contact__content ">
                <div class="module">
                    <div class="contact__icon">
                        <i class="icon icon-didian"></i>
                        <b>办公地点</b>
                    </div>
                    <div class="contact__item">
                        <b>上海总部</b>
                        <a target="_blank" href="http://api.map.baidu.com/marker?location=31.273109,121.659255&title=上海总部&content=上海市浦东新区金海路2449弄7号楼505室&output=html">上海市浦东新区金海路2449弄7号楼505室</a>
                    </div>
                    <div class="contact__item">
                        <b>深圳分部</b>
                        <a target="_blank" href="http://api.map.baidu.com/marker?location=22.613785,114.134215&title=深圳分部&content=深圳市龙岗区布吉街道文锦社区中安大厦1512室&output=html">深圳市龙岗区布吉街道文锦社区中安大厦1512室</a>
                    </div>
                    <div class="contact__item">
                        <b>广州分部</b>
                        <a target="_blank" href="http://api.map.baidu.com/marker?location=23.039025,113.32637&title=广州分部&content=广州市番禺区洛浦街道迎宾路198号五洲城商务中心C座3楼E3002/2003室&output=html">广州市番禺区洛浦街道迎宾路198号五洲城商务中心C座3楼E3002/2003室</a>
                    </div>
                </div>
                <div class="module ">
                    <div class="contact__icon">
                        <i class="icon icon-youxiang"></i>
                        <b>联系邮箱</b>
                    </div>
                    <div class="contact__item">
                        <b>公司邮箱</b>
                        <a href="mailto:yintatech@163.com">yintatech@163.com</a>
                    </div>
                </div>
                <div class="module ">
                    <div class="contact__icon">
                        <i class="icon icon-tel"></i>
                        <b>联系电话</b>
                    </div>
                    <div class="contact__item">
                        <b>王小姐（上海）</b>
                        <p><a href="tel:+021-31779771">021-31779771</a><span>（工作日9:00-17:30）</span></p>
                    </div>
                    <div class="contact__item">
                        <b>曾小姐（深圳）</b>
                        <p><a href="tel:+075508885115">075508885115</a><span>（工作日9:00-17:30）</span></p>
                    </div>
                    <div class="contact__item">
                        <b>黄小姐（广州）</b>
                        <p><a href="tel:+020-31066495">020-31066495</a><span>（工作日9:00-17:30）</span></p>
                    </div>
                </div>
            </div>
            <div class="map_content">
                <div class="map__buttons">
                    <a data-lat="121.659255" data-log="31.273109" class="active">上海</a>
                    <a data-lat="114.134215" data-log="22.613785">深圳</a>
                    <a data-lat="113.32637" data-log="23.039025">广州</a>
                </div>
                <div class="map" id="mapBox" style="width: 100%;height: 500px">

                </div>
            </div>
        </div>
    </section>
<?php include template("content","footer_en_part"); ?>
<!--百度地图-->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=O0QSY8RvyTGiiOWwZVNkAaqeGS4YfIZC"></script>
    <script type="text/javascript">
        $(function(){
            mapLoad('121.659255','31.273109','上海');
            $('.map__buttons a').on('click',function () {
                $(this).addClass('active').siblings().removeClass('active');
                var lat=$(this).attr('data-lat');
                var log=$(this).attr('data-log');
                var city=$(this).text();
                mapLoad(lat,log,city);
            })
        });
        function mapLoad(lat,log,city) {
            var point = new BMap.Point(lat,log);
            var map = new BMap.Map("mapBox");    // 创建Map实例
            var marker = new BMap.Marker(point);  // 创建标注
            map.addOverlay(marker);
            map.centerAndZoom(point, 18);  // 初始化地图,设置中心点坐标和地图级别
            //添加地图类型控件
            var opts = {
                width : 400,     // 信息窗口宽度
                height: 120,     // 信息窗口高度
            };
            var address="";
            if(city=='上海'){
                opts.title ="上海总部";  // 信息窗口标题
                address="上海市浦东新区金海路2449弄7号楼505室7栋7楼<br>12号线金海路站下，出站后公交站台，可任意坐公交车坐2站至金海路金丰路公交站，即到公司办公楼下";
            }else if(city=='深圳'){
                opts.title ="深圳分部"; // 信息窗口标题
                address="深圳市龙岗区布吉街道文锦社区中安大厦1512室<br>交通路线：3号线木棉湾地铁站（C出口或D出口都可以 ）";
            }else if(city=='广州'){
                opts.title ="广州分部";
                address="广州市番禺区洛浦街道迎宾路198号五洲城商务中心C座3楼E3002/2003室<br>12号线金海路站下，出站后公交站台，可任意坐公交车坐2站至金海路金丰路公交站，即到公司办公楼下";
            }
            var infoWindow = new BMap.InfoWindow(address,opts);
            map.setCurrentCity(city);          // 设置地图显示的城市 此项是必须设置的
            map.openInfoWindow(infoWindow,point); //开启信息窗口
            marker.addEventListener("click", function(){
                map.openInfoWindow(infoWindow,point); //开启信息窗口
            });
        }
    </script>
<?php include template("content","footer_en"); ?>