<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:98:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\public/../application/page\view\contact\index.html";i:1711544106;s:87:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\layout\index.html";i:1711467648;s:85:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\common\top.html";i:1711529112;s:88:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\common\banner.html";i:1711544018;s:88:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\common\footer.html";i:1711441513;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link  rel="stylesheet"  href="/assets/css/global.css">

</head>
<body>
<div class="wapper">
    <div class="mapper">
            <a  href="/" class="main_content_left"  >
                <img src="/assets/img/images/jx_logo.png">
            </a>
            <div class="main_content_right">
                <img src="/assets/img/images/phone.png">
                <div class="phon_logo_text">
                    <span>全国免费服务热线</span>
                    <div>13968560738</div>
                </div>
            </div>
    </div>
     <nav>
        <div class="main_nav">
            <ul class="main_nav_ul">
                 <li><a href="<?php echo url('page/index/index'); ?>" >网站首页</a></li>

                 <li><a href="<?php echo url('page/aboutus/index'); ?>" >关于君鑫</a>

                     <ul class="list">
                         <?php if(is_array($acate) || $acate instanceof \think\Collection || $acate instanceof \think\Paginator): $i = 0; $__LIST__ = $acate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                             <li>
                                 <a href="<?php echo url('page/aboutus/index',['id'=>$item['id']]); ?>" >
                                 <?php echo $item['title']; ?>
                                </a>
                             </li>
                         <?php endforeach; endif; else: echo "" ;endif; ?>
                     </ul>

                 </li>

                 <li><a href="<?php echo url('page/product/index'); ?>" >产品展示</a></li>
                 <li>
                     <a href="<?php echo url('page/news/index'); ?>" >
                     新闻资讯
                    </a>

                     <ul class="list">
                         <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                         <li>
                             <a href="<?php echo url('page/news/index',['cid'=>$item['id']]); ?>" >
                                 <?php echo $item['name']; ?>
                             </a>
                         </li>
                         <?php endforeach; endif; else: echo "" ;endif; ?>
                     </ul>

                 </li>
                 <li><a href="<?php echo url('page/services/index'); ?>" >贵金属服务</a></li>
                 <li><a href="<?php echo url('page/purchase/index'); ?>" >废材采购</a></li>
                 <li><a href="<?php echo url('page/knolodeg/index'); ?>" >贵金属知识</a></li>
                 <li><a href="<?php echo url('page/message/index'); ?>" >在线留言</a></li>
                 <li><a href="<?php echo url('page/contact/index'); ?>" >联系我们</a></li>
            </ul>
        </div>
     </nav>












    <head>
    <!--引用百度地图API-->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=3Iu5pku5rIlEokgAsCxp26A5XfHB3AEK"></script>
</head>


<div class="banner" style="height: 451px;
background: url(<?php echo $banner['image']; ?>) no-repeat center">

</div>



<div class="container">
    <div class="container_title">
        <span>联系我们</span>
    </div>
</div>

<div class="content">

    <div class="sidebar">
        <div class="sidebar_title">
            <span>C</span>
            <div>
                <span>联系我们</span>
                <p>ontact Us</p>
            </div>
        </div>
        <ul>
            <li class="focus"><a href="">联系我们</a></li>
        </ul>
    </div>


    <div class="detail">
        <div class="contact_content">
            <h1><?php echo $data['title']; ?></h1>

                <p><?php echo $data['content']; ?></p>

                <!--百度地图容器-->
                <div style="width:900px;height:550px;border:#ccc solid 1px;font-size:12px" id="map"></div>

        </div>
    </div>


</div>


<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){
        map = new BMap.Map("map");
        map.centerAndZoom(new BMap.Point(116.989601,28.830934),15);
    }
    function setMapEvent(){
        map.enableScrollWheelZoom();
        map.enableKeyboard();
        map.enableDragging();
        map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
        target.addEventListener("click",function(){
            target.openInfoWindow(window);
        });
    }
    function addMapOverlay(){
        var markers = [
            {content:"江西省上饶市万年县石镇凤巢工业园区        电话：13968560738",title:"江西省君鑫贵金属科技材料有限公司",imageOffset: {width:-46,height:-21},position:{lat:28.828403,lng:116.995638}}
        ];
        for(var index = 0; index < markers.length; index++ ){
            var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
            var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                    imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
                })});
            var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
            var opts = {
                width: 200,
                title: markers[index].title,
                enableMessage: false
            };
            var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
            marker.setLabel(label);
            addClickHandler(marker,infoWindow);
            map.addOverlay(marker);
        };
    }
    //向地图添加控件
    function addMapControl(){
        var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
        map.addControl(scaleControl);
        var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(navControl);
        var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
        map.addControl(overviewControl);
    }
    var map;
    initMap();
</script>
<footer>
    <div class="footer_content">
        <div class="footer_content_left">
            <span>网站首页</span>
            <span>关于君鑫</span>
            <span>网站首页</span>
            <span>产品展示</span>
            <span>新闻资讯</span>
            <span>贵金属服务</span>
            <span>废料采购</span>
            <span>贵金属知识</span>
            <span>在线留言</span>
            <span>联系我们</span>
            <div class="footer_text">
                <p>联系电话：13968560738</p>
                <p>联系地址：北京市朝阳区东三环北路甲6号</p>
                <p>Copyright©江西省君鑫贵金属科技材料有限公司
                    <span>备案号:赣ICP备20001054号</span>
                    <span>&nbsp;公安.赣公网安备/6112902000023号</span>
                </p>
            </div>

        </div>
        <div class="Qr_code">
            <img src="/assets/img/images/Qr_code.png">
        </div>
    </div>
</footer>
</div>
</body>

</html>