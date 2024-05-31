<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:96:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\public/../application/page\view\news\detail.html";i:1711544205;s:87:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\layout\index.html";i:1711467648;s:85:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\common\top.html";i:1711529112;s:88:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\common\banner.html";i:1711544018;s:84:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\news\left.html";i:1711532684;s:88:"C:\Users\86182\Desktop\fastadmin\www.rejxkj.com\application\page\view\common\footer.html";i:1711441513;}*/ ?>
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


<div class="container">
    <div class="container_title">
        <span>贵金属服务</span>
    </div>
</div>

<div class="content">

    <div class="sidebar">
        <div class="sidebar_title">
            <span>N</span>
            <div>
                <span>新闻资讯</span>
                <p>ews</p>
            </div>
        </div>
        <ul>

    <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <li <?php if($item['id']==$cid): ?> class="focus" <?php endif; ?>>
            <a href="<?php echo url('page/news/index',
                        ['cid'=>$item['id']]); ?>">
                <?php echo $item['name']; ?>
            </a>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; ?>

</ul>
    </div>


    <div class="detail">
        <div class="news_detail">
            <h4><?php echo $detail['title']; ?></h4>

            <div  class="refer">
                <span>发布时间：<?php echo date('Y-m-d',$detail['createtime']); ?></span>
                <span>来源：<?php echo $detail['description']; ?></span>
            </div>

            <p>
                <?php echo $detail['content']; ?>
            </p>
        </div>
        <div class="upPage">上一篇:<a  <?php if($upPage['title']): ?> href="<?php echo url('news/detail',['id'=>$upPage['id']]); ?>" <?php else: ?> href="javascript:;" <?php endif; ?>><?php echo !empty($upPage['title'])?$upPage['title']:'没有了？'; ?></a></div>
        <div class="nextPage">下一篇:<a  <?php if($nextPage['title']): ?>  href="<?php echo url('news/detail',['id'=>$nextPage['id']]); ?>"  <?php else: ?> href="javascript:;" <?php endif; ?>><?php echo !empty($nextPage['title'])?$nextPage['title']:'没有了？'; ?></a></div>

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