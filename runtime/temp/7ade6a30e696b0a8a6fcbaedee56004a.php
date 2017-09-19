<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:72:"/yjdata/www/hhqblog/public/../application/index/view/artical/detail.html";i:1493484542;s:69:"/yjdata/www/hhqblog/public/../application/index/view/public/base.html";i:1493484703;s:71:"/yjdata/www/hhqblog/public/../application/index/view/public/header.html";i:1499241602;s:70:"/yjdata/www/hhqblog/public/../application/index/view/public/right.html";i:1499053479;s:71:"/yjdata/www/hhqblog/public/../application/index/view/public/footer.html";i:1493474232;}*/ ?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport"
	      content="width=device-width, initial-scale=1,maximum-scale=4, minimum-scale=1, user-scalable=no"/>
	<meta name="keywords" content="php技术分享,php博客,个人博客,gitHub,mysql,Nginx,Apache,html,JQuery,css,javascript,js,php,socket,thinkphp,程序员，程序猿，html5 html5 教程, php个人博客源代码"/>
	<meta name="description" content="韩会强博客是一个以PHP学习,PHP技术,PHP网站开发为核心的PHP技术分享博客,真实记录PHPer在学习PHP过程中遇到的各种PHP问题和解决方法-冯定波PHP技术分享博客,提供mysql,Nginx,Apache,html专业知识,专注技术前沿,分享最新技术资讯"/>
	<title>韩会强博客-php江湖-php博客</title>
	<link rel="shortcut icon" href="__ROOT__/favicon.ico" type="image/x-icon">
	<!--ios图标-->
	<link href="__CSS__/prettify.css" type="text/css" rel="stylesheet"/>
	<!--代码高亮-->
	<script type="text/javascript" src="__JS__/jquery.min.js"></script>
	<script type="text/javascript" src="__JS__/suxingme.js"></script>
	<script type="text/javascript" src="__JS__/prettify.js"></script>
	<link rel='stylesheet' id='fontello-css' href='__CSS__/font-awesome.min.css'
	      type='text/css' media='all'/>
	<!--[if lte IE 7]>
	<link rel='stylesheet' id='fontello-ie7-css'
	      href='__CSS__/font-awesome-ie7.min.css' type='text/css' media='all'/>
	<![endif]-->
	<link rel='stylesheet' id='main-css' href='__CSS__/style.css' type='text/css'
	      media='all'/>
	<!--ADD_CODE_HEADER_START-->
	<link rel="stylesheet" href="__CSS__/highlight.css">
	<!--代码高亮css-->
	<script type="text/javascript" src="__JS__/slideshow.js"></script>
<!-- 	<script>
//百度统计
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "https://hm.baidu.com/hm.js?a43511ae0d054430ae20203b0c44a3d3";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
</script> -->
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.hhqblog.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- Piwik -->
<!-- <script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//hhqblog.innocraft.cloud/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script> -->
<!-- End Piwik Code -->
<!-- End Piwik Code -->

	<!--ADD_CODE_HEADER_END-->
</head>
<body class="custom-background">
<div id="header">
	<div class="header">
		<h1 id="logo">
			<hgroup class="logo-site"><a href="<?php echo config('webinfo.weburl'); ?>"> <img
					src="__IMG__/logo.png" alt="韩会强博客"/> </a> </hgroup>
		</h1>
		<div id="mainnav">
			<ul id="nav">
				<li class="current-menu-item"><a href="<?php echo config('webinfo.weburl'); ?>">首页</a></li>
				<?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): if( count($menu)==0 ) : echo "" ;else: foreach($menu as $key=>$cate): if(empty($cate['child'])): ?>
				<li><a href="<?php echo url('Index/index',array('cate_id'=>$cate['id'])); ?>" title="<?php echo $cate['name']; ?>"><?php echo $cate['name']; ?></a></li>
				<?php else: ?>
				<li class="menu-item-has-children submenu "><a href="javascript:;"
															   title="<?php echo $cate['name']; ?>"><?php echo $cate['name']; ?></a><span class="sign "></span>
					<ul class="sub-menu">
						<?php if(is_array($cate['child']) || $cate['child'] instanceof \think\Collection || $cate['child'] instanceof \think\Paginator): if( count($cate['child'])==0 ) : echo "" ;else: foreach($cate['child'] as $key=>$sub_cate): ?>
						<li><a href="<?php echo url('Index/index',array('cate_id'=>$sub_cate['id'])); ?>" title="<?php echo $sub_cate['name']; ?>"><?php echo $sub_cate['name']; ?></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="rightnav"></div>
		<div class="mini_search"> <!-- Search begin -->
			<form onsubmit="return checkSearchForm()" method="post" name="searchform" id="searchform" class="searchform"
			      action="http://www.hanhqtest.com/e/search/index.php">
				<input class="searchInput" name="keyboard" type="text" placeholder="搜索关键字">
				<input class="searchBtn radius" type="submit" title="搜索" value="搜 索">
				<input type="hidden" value="title" name="show">
				<input type="hidden" value="1" name="tempid">
				<input type="hidden" value="news" name="tbname">
				<input name="mid" value="1" type="hidden">
				<input name="dopost" value="search" type="hidden">
			</form>
			<!-- Search end --> </div>
		<a id="mo-so" href="javascript:void(0);"><i class="fa fa-search"></i></a></div>
	<ul id="mobile-menu" class="mininav">
		<li class="current-menu-item"><a href="/">首页</a></li>
		<?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): if( count($menu)==0 ) : echo "" ;else: foreach($menu as $key=>$min_cate): if(empty($min_cate['child'])): ?>
		<li><a href="<?php echo url('Index/index',array('cate_id'=>$min_cate['id'])); ?>" title="<?php echo $min_cate['name']; ?>"><?php echo $min_cate['name']; ?></a></li>
		<?php else: if(is_array($min_cate['child']) || $min_cate['child'] instanceof \think\Collection || $min_cate['child'] instanceof \think\Paginator): if( count($min_cate['child'])==0 ) : echo "" ;else: foreach($min_cate['child'] as $key=>$min_sub_cate): ?>
				<li><a href="<?php echo url('Index/index',array('cate_id'=>$min_sub_cate['id'])); ?>" title="<?php echo $min_sub_cate['name']; ?>"><?php echo $min_sub_cate['name']; ?></a></li>
				<?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>

<div id="wrapper"> <!-- sitenews -->
	<!--内容顶部-->
	
<div class="breadcrumb">你的位置：<a href="<?php echo config('webinfo.weburl'); ?>">首页</a>&nbsp;>&nbsp;
	<a href="javascript:;"><?php echo $article['name']; ?></a>
	<small>&gt;</small>
	<span class="current">正文</span><!-- .breadcrumbs -->
</div>

	<div id="main" class="clearfix">
		<div id="wrap">
			
<div id="article">
	<div id="post">
		<div class="title">
			<div class="post-title">
				<h1><?php echo $article['title']; ?></h1>
				<div class="post_icon"><span class="post-time"><i
						class="fa fa-clock-o"></i> <?php echo date('Y-m-d',$article['create_time']); ?></span> <span class="post-from"><i
						class="fa fa-external-link"></i> <?php echo $article['auth']; ?> </span>
					 <span class="post-cat"><i class="fa fa-align-left"></i> <a href="http://www.hanhqtest.com/cyzx/"><?php echo $article['name']; ?></a> </span>
					<span class="post-view"><i class="fa fa-eye"></i> <?php echo $article['views']; ?></span>
					<span class="post-comment"><a href="javascript:;" title="评论"><i class="fa fa-comment"></i><a
							href="javascript:;"> 50 </a></a> </span>
					<span class="post-like-right" style="color:#f66"> <a title="喜欢就赞一个！" href="javascript:;" class="favorite"> <i
							class="fa fa-heart" style="color:#f66"></i> <span class="count" id="diggnum"> 50 </span></a> </span>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<!--文章标题下方固定ad start-->
		<div class="ad clearfix">
			<div class="pcd_ad">
				<!--<script src=http://www.hanhqtest.com/d/js/acmsd/thea6.js></script>-->
			</div>
			<div class="mbd_ad">
				<table width="100%" height="90" bgcolor="#33CCCC">
					<tr align="center" style="line-height: 90px;background-color: #33CCCC;color: #fff;">
						<td>后台-系统设置-扩展变量-手机广告位-内容正文顶部</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="clear"></div>
		<div class="post"> <!--摘要 start-->
			<div class="excerpt"><strong>[摘要]</strong>
				<p><?php echo $article['remark']; ?></p>
			</div>
			<!--摘要 end--> <!--正文 start-->
			<?php echo $article['content']; ?>
			<!-- 文章分页 -->
			<div id="page">
				<div class="AjaxPage"></div>
			</div>
			<!--正文下方ad-->
			<div class="article-ad">
				<div class="pcd_ad">
					<!--<script src=http://www.hanhqtest.com/d/js/acmsd/thea7.js></script>-->
				</div>
				<div class="mbd_ad">
					<table width="100%" height="90" bgcolor="#33CCCC">
				<tr align="center" style="line-height: 90px;background-color: #33CCCC;color: #fff;">
					<td>后台-系统设置-扩展变量-手机广告-内容页底部1</td>
				</tr>
			</table>
				</div>
			</div>
			<!--百度收录查询-->
			<div style="float:right;clear: both;">百度收录查询</div>
		</div>
		<!--正文 end-->
		<div class="clear"></div>
		<div id="social">
			<div class="social-main">
				<a href="JavaScript:;" title="我赞" class="like favorite"><i class="fa fa-thumbs-o-up"></i>赞
					<i class="count" id="diggnum">(50)</i> </a>
				<a href="#shang" id="shang-main-p" class="shang-p" title="赞助本站"><i class="fa fa-credit-card"></i>打赏</a>
				<!-- <a href="#share" id="share-main-s" class="share-s" title="分享"><i class="fa fa-mail-forward"></i>分享</a> -->
				<div class="clear"></div>
			</div>
			<!-- <div id="share">
				<div class="bdsharebuttonbox bdshare-button-style0-32" data-tag="share_1"
				     data-bd-bind="1432096538496"><a class="bds_tsina" title="分享到新浪微博" data-cmd="tsina"
				                                     href="#"></a> <a class="bds_weixin" title="分享到微信"
				                                                      data-cmd="weixin" href="#"></a> <a
						class="bds_qzone" title="分享到QQ空间" data-cmd="qzone" href="#"></a> <a class="bds_tqq "
				                                                                            title="分享到腾讯微博"
				                                                                            data-cmd="tqq"
				                                                                            href="#"></a> <a
						class="bds_renren" title="分享到人人网" data-cmd="renren" href="#"></a> <a
						class="bds_more" data-cmd="more" href="#"></a>
					<script> window._bd_share_config = {
			                        common: {
			                            "bdSnsKey": {"tsina": "123456789"},
			                            "bdText": "【" + $("title").text() + "】" + $("#post p:lt(2)").text(),
			                            "bdMini": "2",
			                            "bdMiniList": false,
			                            "bdPic": $(".post-content img:first") ? $(".post-content img:first").attr("src") : "",
			                            "bdStyle": "0",
			                            "bdSize": "24"
			                        },
			                        share: [, {
			                            tag: '',
			                            bdSize: '32',
			                            bdCustomStyle: '/static/css/share.css'
			                        }],
			                    };
			                    with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=' + ~(-new Date() / 36e5)]; </script>
				</div> 
			</div>-->
			<div id="shang">
				<div class="shang-main">
					<h4>如果认为本文对您有所帮助请赞助本站</h4>
					<img title="支付宝扫一扫赞助"
					     src="/static/images/zhifubao_qrcode.png"><img
						title="微信扫一扫赞助"
						src="/static/images/wechat_qrcode.png">
					<h4 class="clearfix">
						<li style="width: 50%;float: left;color: #FF6666;">支付宝扫一扫赞助</li>
						<li style=" width: 50%;float: left;color: #5CB85C;">微信扫一扫赞助</li>
					</h4>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="post-statement"> 声明：<!--凡注明“本站原创”的所有文字图片等资料，版权均属<a href='http://www.hanhqtest.com/'
		                                                           target='blank'>韩会强博客</a>所有，-->欢迎转载，但务请注明出处；
		</div>
		<div class="post-tags">标签：
			<a href="javascript:;" target="_blank"><?php echo $article['name']; ?></a>
		</div>
		<div class="clear"></div>
		<!--<div class="post-nav">
			<span class="post-nav-next"><a href='http://www.hanhqtest.com/cyzx/1.html'>O2O 创业公司的倒闭潮即将来临</a> <i
				class="fa fa-angle-right"></i></span>
			<span class="post-nav-prev"><a href='http://www.hanhqtest.com/cyzx/3.html'>7位80后大学生创业者，回西安创业 勇闯天下</a> <i class="fa fa-angle-left"></i></span></div>-->
	</div>
	<!-- post over -->
	<div class="post-gg-2 clearfix">
		<div class="pcd_ad">
			<!--<script src=http://www.hanhqtest.com/d/js/acmsd/thea10.js></script>-->
		</div>
		<div class="mbd_ad">
			<table width="100%" height="90" bgcolor="#33CCCC">
				<tr align="center" style="line-height: 90px;background-color: #33CCCC;color: #fff;">
					<td>后台-系统设置-扩展变量-手机广告-内容页底部2</td>
				</tr>
			</table>
		</div>
	
	</div>
	<!--<div id="related">
		<div class="related-title"><i class="fa fa-bookmark"></i>与本文相关的文章</div>
		<ul class="related_img">
			<li><a href="http://www.hanhqtest.com/cyzx/530.html" title="回首2015，十位大佬眼中的2016或未来的创业趋势"
			       target="_blank"> <img src="/d/file/2016-01-01/902e43f98d1a03335cccb49bc9380a4f.jpg"
			                             alt="回首2015，十位大佬眼中的2016或未来的创业趋势" class="thumbnail"/> </a> <a
					href="http://www.hanhqtest.com/cyzx/530.html" title="回首2015，十位大佬眼中的2016或未来的创业趋势"
					target="_blank">
				<h2>回首2015，十位大佬眼中的2016或未来</h2>
			</a></li>
			<li><a href="http://www.hanhqtest.com/cyzx/529.html" title="资本也能娱乐化，互联网金融跨界娱乐不扯淡"
			       target="_blank"> <img src="/d/file/2016-01-01/d0c7f012ffe18d1e143ee9c447fa0464.jpg"
			                             alt="资本也能娱乐化，互联网金融跨界娱乐不扯淡" class="thumbnail"/> </a> <a
					href="http://www.hanhqtest.com/cyzx/529.html" title="资本也能娱乐化，互联网金融跨界娱乐不扯淡"
					target="_blank">
				<h2>资本也能娱乐化，互联网金融跨界娱乐</h2>
			</a></li>
			<li><a href="http://www.hanhqtest.com/cyzx/528.html" title="创业邦：2015中国最佳创业城市榜单出炉"
			       target="_blank"> <img src="/d/file/2016-01-01/4614ca6a9d1570d1b45336b43303a979.jpg"
			                             alt="创业邦：2015中国最佳创业城市榜单出炉" class="thumbnail"/> </a> <a
					href="http://www.hanhqtest.com/cyzx/528.html" title="创业邦：2015中国最佳创业城市榜单出炉"
					target="_blank">
				<h2>创业邦：2015中国最佳创业城市榜单出</h2>
			</a></li>
			<li><a href="http://www.hanhqtest.com/cyzx/527.html" title="浙江省首届大学生创业峰会开幕在即，这些亮点不容错过"
			       target="_blank"> <img src="/d/file/2016-01-01/801fb54069b9c664ad7b5d1c57a5a062.jpg"
			                             alt="浙江省首届大学生创业峰会开幕在即，这些亮点不容错过" class="thumbnail"/> </a> <a
					href="http://www.hanhqtest.com/cyzx/527.html" title="浙江省首届大学生创业峰会开幕在即，这些亮点不容错过"
					target="_blank">
				<h2>浙江省首届大学生创业峰会开幕在即</h2>
			</a></li>
		</ul>
		&lt;!&ndash; 相关文章原生AD &ndash;&gt;
		<div class="post-gg-2 clearfix" style="box-shadow: none;border: none;padding: 0;">
			<div class="pcd_ad">
				<script src=http://www.hanhqtest.com/d/js/acmsd/thea11.js></script>
			</div>
			<div class="mbd_ad">
				<table width="100%" height="90" bgcolor="#33CCCC">
					<tr align="center" style="line-height: 90px;background-color: #33CCCC;color: #fff;">
						<td>后台-系统设置-扩展变量-手机广告-内容页底部2</td>
					</tr>
				</table>
			</div>
		
		</div>
	</div>-->
	<div class="clear"></div>
	<div id="comments" class="clearfix">
		<div class="comments-box" style="padding: 10px;">
			<div class="pl-520am" data-id="2" data-classid="1"></div>
			<div class="lgy_no_data">
				<p><i class="iconfont icon-comment"></i></p>
				<font color="#999">暂无评论</font>
			</div>
		</div>
	<div class="mb15"></div>
	</div>
</div>

			<div id="sidebar-right">
	<!-- <div class="sidebox widget_vfilm_search">
		<form onsubmit="return checkSearchForm()" method="post" name="searchform" class="search-form"
		      id="search-formhybrid-search" action="http://www.hhqblog.com/e/search/index.php">
			<div class="search-input">
				<b class="search-liaosheji" style="height: 0px; top: 0px;"></b>
				<input class="search-text" placeholder="要不找一找？" type="text" name="keyboard"
				       id="search-texthybrid-search" value=""
				       onfocus="if(this.value==this.defaultValue)this.value='';"
				       onblur="if(this.value=='')this.value=this.defaultValue;">
				<input type="submit" value="　" class="search-button">
			</div>
			<input type="hidden" value="title" name="show">
			<input type="hidden" value="1" name="tempid">
			<input type="hidden" value="news" name="tbname">
			<input name="mid" value="1" type="hidden">
			<input name="dopost" value="search" type="hidden">
		</form>
		<script type="text/javascript">
	            jQuery(".search-input .search-text").bind('focus', function () {
	                jQuery(".search-input .search-liaosheji").animate({height: '23px', top: '-23px'})
	            })
	            jQuery(".search-input .search-text").bind('blur', function () {
	                jQuery(".search-input .search-liaosheji").animate({height: 0, top: 0})
	            })
		</script>
	</div> -->
	<!--搜索-->
	<script type="text/javascript">(function(){document.write(unescape('%3Cdiv id="bdcs"%3E%3C/div%3E'));var bdcs = document.createElement('script');bdcs.type = 'text/javascript';bdcs.async = true;bdcs.src = 'http://znsv.baidu.com/customer_search/api/js?sid=3985469976436119383' + '&plate_url=' + encodeURIComponent(window.location.href) + '&t=' + Math.ceil(new Date()/3600000);var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(bdcs, s);})();</script>
	<!--搜索end-->
	<div class="sidebox widget_authorinfo">
		<div class="author-info">
			<img class="zuozeipc" src="/static/images/post-lz.png">
			<div class="author-avatar">
				<a href="javascript:;" title="站长" rel="author">
					<img alt='站长' src='/static/images/avatar-80x80.jpg' class='avatar avatar-80 photo' height='80' width='80'/>
					<i title="站长" class="author-ident"></i>
				</a>
			</div>
			<div class="author-name">
				<a href="javascript:;" title="由站长发布" rel="author">站长
				</a>
				<a href="javascript:;">
				</a>
				<span>认证</span>
			</div>
			<div class="author-des">
				本小编负责转载分享优秀的文章资源,仅供学习与交流,如果不小心侵犯到您的权益,请及时联系站长删除该资源。如果您有干货要分享，非常欢迎您的投稿。
			</div>
			<div class="author-social">
							<span class="author-blog">
								<a href="javascript:;"  rel="nofollow" target="_blank">
									<i class="fa fa-home"></i>博客
								</a>
							</span>
				<span class="author-weibo">
								<a href="javascript:;" rel="nofollow" target="_blank">
								    <i class="fa fa-weibo"></i>微博
								</a>
							</span>
			</div>
		</div>
	</div>
	<div class="sidebox widget_vfilm_tab">
		<div id="tab-title" class="investment_title">
			<div class="on"> 随机推荐</div>
			<div> 最新发布</div>
		</div>
		<div id="tab-content" class="investment_con">
			<div class="investment_con_list" style="display:block;">
				<ul class="tab_post_links">
					<?php if(is_array($recommend) || $recommend instanceof \think\Collection || $recommend instanceof \think\Paginator): $k = 0; $__LIST__ = $recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$re): $mod = ($k % 2 );++$k;?>
					<li>
						<a href="<?php echo url('index/Artical/detail',array('id'=>$re['id'])); ?>" title="<?php echo $re['title']; ?>" class='tab_post_title'>
							<span class='post_i num1'><?php echo $k; ?></span><?php echo $re['title']; ?>
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="investment_con_list">
				<ul class="tab_post_links">
					<?php if(is_array($newarticle) || $newarticle instanceof \think\Collection || $newarticle instanceof \think\Paginator): $k = 0; $__LIST__ = $newarticle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($k % 2 );++$k;?>
					<li>
						<a href="<?php echo url('index/Artical/detail',array('id'=>$new['id'])); ?>" title="<?php echo $new['title']; ?>" class='tab_post_title'>
							<span class='post_i num1'> <?php echo $k; ?> </span> <?php echo $new['title']; ?>
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="sidebox widget_text">
		<h2><i class="fa fa-th-list"></i>广告赞助</h2>
		<div class="textwidget">
			<table width="300" height="250" bgcolor="#33CCCC">
				<tr align="center" style="line-height: 250px;">
					<td>后台-插件-广告管理-侧边广告位一</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="sidebox widget_vfilm_hotpost">
		<h2><i class="fa fa-th-list"></i>本站热门</h2>
		<ul class="hotpost">
			<?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?>
			<li>
				<a href="<?php echo url('index/Artical/detail',array('id'=>$h['id'])); ?>" title="<?php echo $h['title']; ?>">
					<div class="hotpost-img">
						<img src="<?php echo config('webinfo.host_domain'); ?><?php echo config('webinfo.qiniu_url'); ?><?php echo $h['photo']; ?>-hhqblog" alt="<?php echo $h['title']; ?>" class="thumbnail"/>
					</div>
					<div class="hotpost-left">
						<span class="hot-post-title"> <?php echo $h['title']; ?></span>
						<span class="hot-post-info"><i class="fa fa-clock"></i><?php echo date('Y-m-d',$h['create_time']); ?> </span>
						<span class="hot-post-info"><i class="fa fa-eye"></i> <?php echo $h['views']; ?> </span>
					</div>
				</a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="sidebox widget_text">
		<h2><i class="fa fa-th-list"></i>广告赞助</h2>
		<div class="textwidget">
			<table width="300" height="250" bgcolor="#33CCCC">
				<tr align="center" style="line-height: 250px;">
					<td>后台-插件-广告管理-侧边广告位二</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="sidebox widget_vfilmtime_comment">
		<h2><i class="fa fa-th-list"></i>最新评论</h2>
		<div class="w_comment">
			<ul>
				<li><img alt="" src="/static/images/userpic/19.gif"
				         class="avatar avatar-35 photo" height="35" width="35"/>
					<a href="http://www.hhqblog.com/cyzx/534.html#comment" title="匿名在一个草根微商暴富梦破：几个月8万亏一半 重回工厂打工上的评论" class="comment_r">
						<p class="comment_author">匿名：</p>
						<p class="datetime">2017-02-01</p>
						<br>
						<p>近日，在微商行业摸爬滚打超过一年的小依，向记者分享她曾经的“创业</p>
					</a>
				</li>
				<li><img alt="" src="/static/images/userpic/19.gif"
				         class="avatar avatar-35 photo" height="35" width="35"/>
					<a href="http://www.hhqblog.com/cyzx/534.html#comment" title="匿名在一个草根微商暴富梦破：几个月8万亏一半 重回工厂打工上的评论" class="comment_r">
						<p class="comment_author">匿名：</p>
						<p class="datetime">2017-02-01</p>
						<br>
						<p>近日，在微商行业摸爬滚打超过一年的小依，向记者分享她曾经的“创业</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebox widget_text">
		<!-- <h2><i class="fa fa-th-list"></i>广而告之</h2>
		<div class="textwidget">
			<div class="textwidget">
				<table width="300" height="250" bgcolor="#33CCCC">
					<tr align="center" style="line-height: 250px;">
						<td>后台-插件-广告管理-侧边广告位二</td>
					</tr>
				</table>
			</div>
		</div>  -->
		<!--<div id="widgetIframe"><iframe width="100%" height="350" src="http://piwik.hhqblog.com/index.php?module=Widgetize&action=iframe&widget=1&moduleToWidgetize=Live&actionToWidgetize=getSimpleLastVisitCount&idSite=1&period=day&date=today&disableLink=1&widget=1&token_auth=54a2252a2ca3dd7848d58fcab867dd34
" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>
	</div>-->
</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!-- wrapper over -->
<div id="footer">
	<div id="footer-bottom">
		<!--友情链接-->
		<div id="links">
			<ul>
				<li class="link-title"><a href="http://www.hanhqtest.com/e/extend/doaddlink/" target="_blank"
				                          title="换友链请戳进来" style="color:#f66;font-weight:bold;">友情链接:</a></li>
				<li id="linkcat-148" class="linkcat">
					<h2>首页友链</h2>
					<ul class='xoxo blogroll'>
						<li><a href="http://moyublog.com" target="_ablank">
							墨鱼部落格 </a></li>
						<li><a href="http://moyu2013.taobao.com" target="_ablank">
							商业源码 </a></li>
						<li><a href="http://99yuanma.net" target="_ablank">
							久久源码 </a></li>
						<li><a href="http://www.99ziyuan.net" target="_ablank">
							久久资源网 </a></li>
					</ul>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
		<div id="footer-box">
			<ul>
				<li class="ft1"><img src="/static/images/weixin.jpg"></li>
				<li class="ft2">
					<div class="ft2-1">
						<h3>联系我们</h3>
						<ul id="nav" class="menu">
							<li><a rel="nofollow" href="/misc/about/">关于我们</a></li>
							<li><a rel="nofollow" href="/misc/ads/">广告合作</a></li>
							<li><a rel="nofollow" href="/misc/contact/">联系我们</a></li>
						</ul>
					</div>
					<div class="ft2-2">
						<h3>网站导航</h3>
						<ul id="nav" class="menu">
							<li><a rel="nofollow" href="/misc/tags/">标签云</a></li>
							<li><a rel="nofollow" href="/misc/copyright/">免责声明</a></li>
							<li><a rel="nofollow" href="/misc/tougao/">投稿规则</a></li>
						</ul>
					</div>
				</li>
				<li class="ft3">
					<p style="text-indent: 2em;">
						本站是一个关注互联网发展,聚焦互联网前沿资讯,交流最新IT产品心得,分享好玩的视频、软件,为广大互联网爱好者速递最有料资讯的IT科技博客。建立本站旨在与更多人分享使用电脑的快乐与精彩！ </p>
					<p class="zhanzhang"><a href="http://wpa.qq.com/msgrd?v=3&uin=12345678&site=qq&menu=yes"
					                        rel="external nofollow" target="_blank" title="跟站长来一发QQ聊天吧"><i
							class="fa fa-qq"></i></a> <a href="http://weibo.com/" rel="external nofollow"
					                                     target="_blank" title="关注站长新浪微博"><i
							class="fa fa-weibo"></i></a> <a href="http://t.qq.com/" rel="external nofollow"
					                                        target="_blank" title="关注站长腾讯微博"><i
							class="fa fa-tencent-weibo"></i></a> <a href="javascript:void(0)" onMouseOut="hideimg()"
					                                                onmouseover="showimg()" title="关注站长微信"><i
							class="fa fa-wechat"></i></a></p>
					<div id="wximg" style="display:none;"><img src="/static/images/weixin.jpg"></div>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
	</div>
	<div class="credit"> Copyright © 2014-2017&nbsp;<a class="site-link" href="<?php echo config('webinfo.weburl'); ?>" title="韩会强博客"
	                                                   rel="home">
		韩会强博客 </a>&nbsp;丨 <a href="http://www.miitbeian.gov.cn" rel="external nofollow" target="_blank">
		鲁ICP备16023753号-2 </a>&nbsp;丨
		统计代码
	</div>
</div>
<script type="text/javascript" src="__JS__/jquery.sticky.js"></script>
<script> jQuery(window).load(function () {
    jQuery("#sidebar-left-xf").sticky({topSpacing: 10, bottomSpacing: 240});
}); </script>
<script>
    jQuery(document).ready(function (a) {
        var c = 1,
            d = 2;
        a.browser.msie && 6 == a.browser.version && !a.support.style || (
            e = a("#sidebar-right").width(), <!-- 右侧边栏宽度 -->
                f = a("#sidebar-right .sidebox"), <!-- 右侧边栏（不含悬浮）-->
                g = f.length, <!-- 右侧边栏高度（不含悬浮）-->
            g >= (c > 0) && g >= (d > 0) && a(window).scroll(function () {
                var b = document.documentElement.scrollTop + document.body.scrollTop;
                <!-- 滚动条距离上方-->
                b > f.eq(g - 1).offset().top + f.eq(g - 1).height() ? 0 == a(".roller").length ? (f.parent().append('<div class="roller"></div>'),
                            f.eq(c - 1).clone().appendTo(".roller"),
                        c !== d && f.eq(d - 1).clone().appendTo(".roller"),
                            a(".roller").css({
                                position: "fixed",
                                top: 10,
                                zIndex: 0,
                                width: 250
                            }),
                            a(".roller").width(e)) : a(".roller").fadeIn(300) : a(".roller").fadeOut(300)
            }));
        //标签切换
        function tabs(tabTit, on, tabCon) {
            $(tabCon).each(function () {
                $(this).children().eq(0).show();
            });
            $(tabTit).each(function () {
                $(this).children().eq(0).addClass(on);
            });
            $(tabTit).children().mouseover(function () {
                $(this).addClass(on).siblings().removeClass(on);
                var index = $(tabTit).children().index(this);
                $(tabCon).children().eq(index).show().siblings().hide();
            });
        }

        tabs(".investment_title", "on", ".investment_con");
        <!--代码高亮-->
        jQuery("pre").addClass("prettyprint linenums");
        prettyPrint();
    });
  //百度分享
  window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"【" + $("title").text() + "】" + $("#post h1:lt(2)").text(),"bdMini":"2","bdMiniList":false,"bdPic":$(".post-content img:first") ? $(".post-content img:first").attr("src") : "","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"4","bdPos":"right","bdTop":"100"},"image":{"viewList":["weixin","sqq","qzone","tsina","tqq","renren"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","sqq","qzone","tsina","tqq","renren"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
<!--ADD_CODE_FOOTER_START-->
<script type="text/javascript" src="__JS__/add.js"></script>
<script src="/static/admin/js/laypage/laypage.js"></script>
<script src="/static/admin/js/laytpl/laytpl.js"></script>
<!--ADD_CODE_FOOTER_END-->
<a href="#0" class="cd-top">Top</a>
<div class="adm" style="display: none;"></div>
<div class="hotarticlead"> <!--右下角广告或者弹窗或者对联广告可以放这里 --> </div>

<script>
    $(function(){
        ajax_page();
    });
    //以下将以jquery.ajax为例，演示一个异步分页
    function ajax_page(curr) {
            laypage({
                cont: $('.AjaxPage'),//容器。值支持id名、原生dom对象，jquery对象,
                pages: '<?php echo $allpage; ?>',//总页数
                skip: false,//是否开启跳页
                skin: '#32a5e7',//分页组件颜色
                curr: curr || 1,
                allpage:true,
                groups: 5,//连续显示分页数
                jump: function (obj, first) {
                    if(!first){
                        var curr = obj.curr;
                        alert(curr);
					}
                }
            });
    }
</script>

</body>
</html>