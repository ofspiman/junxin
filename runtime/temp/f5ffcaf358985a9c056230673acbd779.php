<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:96:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\public/../application/page\view\index\index.html";i:1711544435;s:87:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\layout\index.html";i:1711467648;s:85:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\common\top.html";i:1711529112;s:88:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\common\banner.html";i:1711544018;s:88:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\common\footer.html";i:1711441513;}*/ ?>
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












    
<div class="banner" style="height: 451px;
background: url(<?php echo $banner['image']; ?>) no-repeat center">

</div>



<div class="product_content">
    <div class="title">
        PRODUCTS DISPLAY
        <h3>产品展示</h3>
    </div>
    <div class="product_content_ul">
        <ul>
            <?php if(is_array($pdata) || $pdata instanceof \think\Collection || $pdata instanceof \think\Paginator): $i = 0; $__LIST__ = $pdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <li>
                    <a href="<?php echo url('product/detail',['id'=>$item['id']]); ?>">
                        <img src="<?php echo $item['image']; ?>">
                        <span><?php echo $item['title']; ?></span>
                    </a>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

<div class="infomercial">
    <div class="infomercial_text">
        <span>君鑫贵金属立足江西，面向国际</span>
        <div>我们坚信，通过不断努力和探索</div>
        <div>公司一定能成为贵金属产业链最具价值的服务商</div>
    </div>
</div>

<div class="wing">
    <div class="wing_content">
        <span>为什么<b>君鑫贵金属</b>材料备受</span>
        <p>万千客户所信赖</p>
    </div>
</div>

<div class="trust">
    <ul>
        <li><img src="/assets/img/images/num01.png"></li>
        <li class="trust_noe_mind">
            <h5>经验丰富，专业化、规模化</h5>
            <p>
                园区征地<b>97亩</b>,建设厂房及附属设施<b>25000平方米</b>,<br>
                国际先进、成熟的技术和装备
            </p>
            <p>
                将形成年处理<b>3000吨</b>贵金属废料的建设规模，<br>
                年产贵金属及其衍生物<b>125.022吨</b>
            </p>
            <p>
                司通过ISO9001、ISO14001、ISO45001认证体系，获得<br>
                <b>国家高新技术企业、省级专特新中小企业、市级企业技术中心、<br>
                    诚信共建单位、纳税10强工业企业、全国有色金属标准化优秀二等奖</b>等称号
            </p>
        </li>
        <li><img src="/assets/img/images/true_logo.jpg"></li>
    </ul>

    <ul>
        <li>
            <img src="/assets/img/images/true_logos.png">
            <img src="/assets/img/images/true_logos2.png">
        </li>

        <li><img src="/assets/img/images/num02.jpg"></li>

        <li class="trust_mind">
            <h5>优秀科研团队与生产技术</h5>
            <p><b>建立贵金属碳载催化剂技术中心   上饶市贵金属废料综合利用工程<br>技术研究中心</b></p>

            <p>与国内外研究机构和业内同行的合作</p>

            <p>
                不断<b>完善设备设施</b>，拓展贵金属化合物、<b>材料深加工</b>及应用领域
            </p>
        </li>
    </ul>

    <ul>
        <li><img src="/assets/img/images/num03.jpg"></li>
        <li class="trust_mind">
            <h5>与国内外知名企业合作</h5>
            <p>以贵金属废弃物资源化利用为核心</p>
            <p>先后分别与 <b>中国石化、中国石油、英国庄信、黎明化工研究院</b>等</p>
            <p>企业建立了长期稳定的业务合作关系</p>
            <p>为合作伙伴提供贵金属催化剂回收利用的承载平台</p>
        </li>
        <li><img src="/assets/img/images/shiyou_logo.jpg"></li>
    </ul>
</div>

<div class="aboutus">
    <div class="title">
        COMPANY PROFILE
        <h3>关于我们</h3>
    </div>
    <div class="aboutus_content">
        <div class="video_box">
            <div class="balack"></div>
            <div class="video">
                <video id="video"
                       controls
                       controlslist="nodownload"
                       poster="/assets/img/images/jx.jpg"
                >
                    <source src="/assets/img/images/20240326.mp4"  type="video/mp4">
                </video>
            </div>
        </div>

        <ul>
            <li>
                <span>公司使命</span>
                <p>为商业伙伴创造独特价值，为员工提供更好发展平台，为社会贡献绿色再生资<br>
                    源，以社会责任以己 任，以创新技术为核心，推动贵金属产业的可持续发展
                </p>
            </li>

            <li>
                <span><?php echo $aboutus['title']; ?></span>
                <p>
                    <?php echo $aboutus['keywords']; ?>
                </p>
            </li>

            <li>
                <a href="<?php echo url('page/aboutus/index'); ?>">了解更多</a>
            </li>
        </ul>
    </div>

</div>

<div class="news_and_message">
    <div class="news_content">
        <div class="title_bg">
            <span>新闻资讯</span>
            <span>NEWS</span>
            <ul>
                <?php if(is_array($newslist) || $newslist instanceof \think\Collection || $newslist instanceof \think\Paginator): $i = 0; $__LIST__ = $newslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href=""><?php echo $item['title']; ?></a>
                        <span><?php echo date('Y-m-d',$item['refreshtime']); ?></span>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>

    <div class="message_content">
        <div class="title_bg">
            <span>在线留言</span>
            <span>LEAVE A MESSAGE ONLINE</span>
            <form action="<?php echo url('page/message/save'); ?>" method="post">
                <?php echo token(); ?>
                <li><span>您的姓名：</span><input type="text" name="name" ></li>
                <li><span>您的电话：</span><input type="text" name="phone" ></li>
                <li><span>您的邮箱：</span><input type="text"  name="email"></li>
                <li><span>备注说明：</span><textarea name="content" id="content" ></textarea>
                <li><input type="submit"  class="btn" value="我要留言"></li>
            </form>
        </div>
    </div>

</div>
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