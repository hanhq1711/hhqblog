<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:74:"E:\phpStudy\WWW\hblog\public/../application/index\view\artical\detail.html";i:1493217477;s:71:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\base.html";i:1493212498;s:73:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\header.html";i:1493211437;s:72:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\right.html";i:1493212498;s:73:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\footer.html";i:1490975543;}*/ ?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport"
	      content="width=device-width, initial-scale=1,maximum-scale=4, minimum-scale=1, user-scalable=no"/>
	<meta name="keywords" content="韩会强博客"/>
	<meta name="description" content="韩会强博客"/>
	<title>韩会强博客</title>
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
	<a href="http://www.hanhqtest.com/cyzx/">创业资讯</a>
	<small>&gt;</small>
	<span class="current">正文</span><!-- .breadcrumbs -->
</div>

	<div id="main" class="clearfix">
		<div id="wrap">
			
<div id="article">
	<div id="post">
		<div class="title">
			<div class="post-title">
				<h1>互联网时代，农村创业的9大商机</h1>
				<div class="post_icon"><span class="post-time"><i
						class="fa fa-clock-o"></i> 2016-01-01</span> <span class="post-from"><i
						class="fa fa-external-link"></i> 互联网整理 </span>
					<!-- <span class="post-cat"><i class="fa fa-align-left"></i> <a href="http://www.hanhqtest.com/cyzx/">创业资讯</a> </span> -->
					<span class="post-view"><i class="fa fa-eye"></i> <script
							src=http://www.hanhqtest.com/e/public/ViewClick/?classid=1&id=2&addclick=1></script></span>
					<span class="post-comment"><a href="http://www.hanhqtest.com/cyzx/2.html" title="评论"><i
							class="fa fa-comment"></i><a
							href="http://www.hanhqtest.com/cyzx/2.html#comments"> <script
							src=http://www.hanhqtest.com/e/public/ViewClick/?classid=1&id=2&down=2></script></a></a> </span>
					<span class="post-like-right" style="color:#f66"> <a title="喜欢就赞一个！"
					                                                     href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg/?classid=1&id=2&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');"
					                                                     class="favorite"> <i
							class="fa fa-heart" style="color:#f66"></i> <span class="count" id="diggnum"><script
							src=http://www.hanhqtest.com/e/public/ViewClick/?classid=1&id=2&down=5></script></span></a> </span>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<!--文章标题下方固定ad start-->
		<div class="ad clearfix">
			<div class="pcd_ad">
				<script src=http://www.hanhqtest.com/d/js/acmsd/thea6.js></script>
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
				<p>7月14日，财政部、商务部公布：2015年电子商务进农村综合示范工作的200个示范县名单，中央财政计划安排
					20亿专项资金进行对口扶持发展农村电子商务。重点全力扶持中西部地区，特别 [&hellip;]</p>
			</div>
			<!--摘要 end--> <!--正文 start-->
			
			<p>7月14日，财政部、商务部公布：2015年电子商务进农村综合示范工作的200个示范县名单，中央财政计划安排
				20亿专项资金进行对口扶持发展农村电子商务。重点全力扶持中西部地区，特别是革命老区的农村电子商务发展，资金的使用重点向建设县、乡、村三级物流配送体系倾斜。在新公布的200个示范县中，中西部县区占82.5%，贫困县占比超过43.5%，包括赣南、黔东、陇南、陕北等革命老区，每一个试点县将拨款1000万元扶持。</p>
			<p><br/></p>
			<p style="text-align: center"><img src="/d/file/2016-01-01/25c7b87360627eedf8dd2ea14ffcf7e4.jpg"
			                                   title="互联网时代，农村创业的9大商机" alt="互联网时代，农村创业的9大商机"/></p>
			<p><br/></p>
			<p>资金使用要求规范使用在三个方面：</p>
			<p><br/></p>
			<blockquote><p>第一、建立完善的县、乡、村三级物流配送体系；</p>
				<p><br/></p>
				<p>第二、用于支持县域电子商务公共服务中心和村级电子商务服务站的建设改造；</p>
				<p><br/></p>
				<p><span style="color: rgb(192, 0, 0);"><span id="_baidu_bookmark_start_93"
				                                              style="display: none; line-height: 0px;">?</span></span><span
						id="_baidu_bookmark_start_95" style="display: none; line-height: 0px;">?</span>第三、用于支持农村电子商务培训。<span
						id="_baidu_bookmark_end_96" style="display: none; line-height: 0px;">?</span><span
						style="color: rgb(192, 0, 0);"><span id="_baidu_bookmark_end_94"
				                                             style="display: none; line-height: 0px;">?</span></span>
				</p>
				<p><br/></p></blockquote>
			<p>现将地方通过竞争性方式选出的电子商务进农村综合示范县名单予以公布。请电商、物流、商贸、邮政、供销、金融等各类企业和个人积极参与农村电子商务工作。</p>
			<p><br/></p>
			<p><strong>解析国家政策背后的商机</strong></p>
			<p><br/></p>
			<p>
				从最新国家政策看，农村电商、农产品电商、农村物流、农特微商将引来一股新的创业商机，具体会有哪些机会呢？我本人关注和扶持农村电商和农村物流的各种运营案例和迭代的模式多年，下面我来一一解读接下来的各种创业商机</p>
			<p><br/></p>
			<p><span style="color: rgb(192, 0, 0);"><strong>第一点、农村电商、农村代购创业</strong></span></p>
			<p><br/></p>
			<p>
				2015年电商平台渠道下沉成为主流趋势，京东、阿里等电商平台在县域、农村电商领域杀得火热。中国一线城市的互联网网购人群4.5亿左右，县域及农村电商市场超过9亿人口。随着农村互联网的快速发展，农村电商在2015年出现井喷式的发展，农村电商创业迎来重要的商机。</p>
			<p><br/></p>
			<p><span style="color: rgb(192, 0, 0);"><strong>第二点、县域农村电商物流创业</strong></span></p>
			<p><br/></p>
			<p>
				县域经济电商物流创业是当前非常好的商机，全国的快递网络都能够到达县级城市，但要从县级覆盖到村级的物流，这是当前所有快递的一大软肋，不仅仅是普通快递包裹，还包括大家电等品类的物流需求。京东、阿里菜鸟等各大电商平台为了布局农村电商，都在通过各种的模式推动县到村级的物流网络建设。</p>
			<p><br/></p>
			<p><span style="color: rgb(192, 0, 0);"><strong>第三点、农村刷墙创业</strong></span></p>
			<p><br/></p>
			<p>
				某农村刷墙公司年入几千万，被估值10亿。刷墙的商业价值：抓住农村互联网的入口；运营方式：招募20余万网络村官，线下推进，雇佣农民；数据：整合农村1万家小卖部对乡村用户分析；策略：策划农民打交道的语言刷墙...上游对接各大想进入农村市场的电商品牌、互联网品牌、家电、快消等。</p>
			<p><br/></p>
			<p><span style="color: rgb(192, 0, 0);"><strong>第四点、农产品电商创业（F2B和F2C）</strong></span></p>
			<p><br/></p>
			<p>农产品直供模式即FaVrmto
				Business，当前主要聚焦在城市本地化为主，消灭中间的渠道，直接将产地与城市酒店、食堂、学校、机关等机构对接，这样的模式已经在全国各地出现，而且有的已获大额风险投资。我这里要说的不是要去搭建这个平台，作为上游的平台，他一定是多农业基地对接的，我建议的是农产品产地（基地端）的创业者，去帮助农民规划指导种植，然后对接上游平台，因为农民不懂电商、也不懂集中采购、订单农业，这需要新时代的新农人以创业的形式去组织，去对接。</p>
			<p><br/></p>
			<p><span style="color: rgb(192, 0, 0);"><strong>第五点、农特微商创业</strong></span></p>
			<p><br/></p>
			<p>
				2015年农特微商全面爆发，如果你那里具有地标性的特产，具有农特微商的基础，那完全可以参与农特微商创业。我们正在推动万人农特微商创业孵化平台，农特基地方面已经聚焦了600多个全国农特基地，重点扶持50大农特基地。全国建立20大农特微商创业孵化园，所有对接农特微商基地产品的渠道创业者，同样可以申请渠道创业。同时农特微商还打造全网的快物流通路，干线+城市配送的快物流网络。</p>
			<p><br/></p>
			<p><span style="color: rgb(192, 0, 0);"><strong>第六点、农村O2O服务平台创业</strong></span></p>
			<p><br/></p>
			<p>
				这里要特别说明的是O2O服务平台，不是单一的物流、电商。以日日顺为例，日日顺在全国布局了2万多个村级服务站，日日顺的服务不仅仅是物流，包括家电送装、以旧换新为一体的综合服务平台，以服务家住农村家庭的消费入口拥有足够大的商业机会，而且可以衍生出代购等价值。</p>
			<p><br/></p>
			<p><span style="color: rgb(192, 0, 0);"><strong>第七点、农资集中采购平台、农机融资租赁创业</strong></span></p>
			<p><br/></p>
			<p>
				农村集中采购平台其实按理说是供销社的事情，但国企的体制，中国的供销社没有一个玩转互联网的。所以“互联网+农业”发展的今天，应该尝试被变革了。结合农村对农资、种子、农业机械的需求，完全可以搭建一个农资的集中采购平台。如果涉及重大的农业机械设备，还可以和金融机构推动融资租赁模式，获得更大的商业空间。</p>
			<p><br/></p>
			<p><span style="color: rgb(192, 0, 0);"><strong>第八点、农村电商培训创业</strong></span></p>
			<p><br/></p>
			<p>
				7月14日商务部和财政部新政中，中央的20亿扶持农村电商发展，有一个重要方向就是用于支持农村电子商务培训。整个新农业的发展培训是一个重大的市场，需要有互联网新思维的人，走下去，走到县域和地方进行交流培训。我今年4月份受邀去湖南郴州永兴县2000人的农特微商的培训大会上，让湖南最大的冰糖橙基地的合作社和政府焕然一新，让他们看到了互联网+农业的新发展基于，特别是对于他们的地标特产的互联网化。</p>
			<p><br/></p>
			<p><span style="color: rgb(192, 0, 0);"><strong>第九点、农村旅游平台创业</strong></span></p>
			<p><br/></p>
			<p>
				农业互联网化，带动的不仅仅是商品买卖和服务，另一个产业旅游业也是巨大的商业价值。如果全国地标性特产的地方，搭建农村旅游体验的大平台，以吃货体验+乡村游+订单农业+互联网营销为一体。今年6月，农特微商知名品牌，互联网燕窝第一品牌“简小妞燕窝”，就组织了一场走进马来西亚的燕窝寻燕之旅获得了非常有价值的效果。</p>
			<p><br/></p>
			<p><span style="color: rgb(192, 0, 0);"><strong>描述</strong></span></p>
			<p><br/></p>
			<p>互联网+农业，不仅仅是向农村卖商品，也不是把农村商品卖向城市，这是一个生态体系的搭建，也是以创业带动就业的重大平台，特别是农特微商的结合。</p>
			<p><br/></p>
			<p>盘点这9大创业模式，远远比在城市里创业更容易。农村更是一片创业天地，只要对农业有情怀，愿意带着互联网的新思维杀向农村的创业者，都会拥有商机。</p>
			<p><br/></p>
			<p>这个社会，成功者都不是等待者、也不是观望者，也不笑谈者，更多的是执行者。</p>
			<p><br/></p>
			<p>
				一切商机是干出来的，不是吹出来的。一个好商机，100个人想到了，结果只有10个人敢于冒险去做，做的过程中9个半途而废放弃，最终最坚持的那个做成功了！也许他还不是最先当道这个项目的人。所以成功和爱一样，是做出来的，不是吹出来的。</p>
			<p><br/></p>
			<p>互联网行业从业多年，研究电商和微信营销</p>
			<p><br/></p>
			<p>文/电商思维，公众号：wssw10000</p>
			
			<!-- 文章分页 -->
			<div id="page"></div>
			<!--正文下方ad-->
			<div class="article-ad">
				<div class="pcd_ad">
					<script src=http://www.hanhqtest.com/d/js/acmsd/thea7.js></script>
				</div>
				<div class="mbd_ad">
					<table width="100%" height="90" bgcolor="#33CCCC">
						<tr align="center">
							<td>后台-系统设置-扩展变量-手机广告位-内容正文底部</td>
						</tr>
					</table>
				</div>
			</div>
			<!--百度收录查询-->
			<div style="float:right;clear: both;"></div>
		</div>
		<!--正文 end-->
		<div class="clear"></div>
		<div id="social">
			<div class="social-main"><a
					href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg/?classid=1&id=2&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');"
					title="我赞" class="like favorite"><i class="fa fa-thumbs-o-up"></i>赞 <i class="count"
			                                                                               id="diggnum">(
				<script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=1&id=2&down=5></script>
				)</i> </a> <a href="#shang" id="shang-main-p" class="shang-p" title="赞助本站"><i
					class="fa fa-credit-card"></i>打赏</a> <a href="#share" id="share-main-s" class="share-s"
			                                                title="分享"><i class="fa fa-mail-forward"></i>分享</a>
				<div class="clear"></div>
			</div>
			<div id="share">
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
                            bdCustomStyle: 'http://www.hanhqtest.com/skin/ecms118/css/share.css'
                        }],
                    };
                    with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=' + ~(-new Date() / 36e5)]; </script>
				</div>
			</div>
			<div id="shang">
				<div class="shang-main">
					<h4>如果认为本文对您有所帮助请赞助本站</h4>
					<img title="支付宝扫一扫赞助"
					     src="http://www.hanhqtest.com/skin/ecms118/images/zhifubao_qrcode.png"><img
						title="微信扫一扫赞助"
						src="http://www.hanhqtest.com/skin/ecms118/images/wechat_qrcode.png">
					<h4 class="clearfix">
						<li style="width: 50%;float: left;color: #FF6666;">支付宝扫一扫赞助</li>
						<li style=" width: 50%;float: left;color: #5CB85C;">微信扫一扫赞助</li>
					</h4>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="post-statement"> 声明：凡注明“本站原创”的所有文字图片等资料，版权均属<a href='http://www.hanhqtest.com/'
		                                                           target='blank'>韩会强博客</a>所有，欢迎转载，但务请注明出处；
		</div>
		<div class="post-tags">标签：<a
				href="http://www.hanhqtest.com/e/tags/?tagname=%E8%BF%94%E4%B9%A1%E5%88%9B%E4%B8%9A"
				target="_blank">返乡创业</a> &nbsp; <a
				href="http://www.hanhqtest.com/e/tags/?tagname=%E5%86%9C%E6%9D%91%E5%88%9B%E4%B8%9A"
				target="_blank">农村创业</a></div>
		<div class="clear"></div>
		<div class="post-nav"><span class="post-nav-next"><a href='http://www.hanhqtest.com/cyzx/1.html'>O2O 创业公司的倒闭潮即将来临</a> <i
				class="fa fa-angle-right"></i></span> <span class="post-nav-prev"><a
				href='http://www.hanhqtest.com/cyzx/3.html'>7位80后大学生创业者，回西安创业 勇闯天下</a> <i
				class="fa fa-angle-left"></i></span></div>
	</div>
	<!-- post over -->
	<div class="post-gg-2 clearfix">
		<div class="pcd_ad">
			<script src=http://www.hanhqtest.com/d/js/acmsd/thea10.js></script>
		</div>
		<div class="mbd_ad">
			<table width="100%" height="90" bgcolor="#33CCCC">
				<tr align="center" style="line-height: 90px;background-color: #33CCCC;color: #fff;">
					<td>后台-系统设置-扩展变量-手机广告-内容页底部</td>
				</tr>
			</table>
		</div>
	
	</div>
	<div id="related">
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
		<!-- 相关文章原生AD -->
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
	</div>
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
	<div class="sidebox widget_vfilm_search">
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
	</div>
	<div class="sidebox widget_authorinfo">
		<div class="author-info">
			<img class="zuozeipc" src="/static/images/post-lz.png">
			<div class="author-avatar">
				<a href="http://www.hhqblog.com/e/space/listuseract.php?mid=1&tempid=11&userid=[!--userid--]" title="站长" rel="author">
					<img alt='站长' src='/static/images/avatar-80x80.jpg' class='avatar avatar-80 photo' height='80' width='80'/>
					<i title="站长" class="author-ident"></i>
				</a>
			</div>
			<div class="author-name">
				<a href="http://www.hhqblog.com/e/space/listuseract.php?mid=1&tempid=11&userid=[!--userid--]" title="由站长发布" rel="author">站长
				</a>
				<a href="http://www.hhqblog.com/e/space/listuseract.php?mid=1&tempid=11&userid=[!--userid--]" target="_blank">
				</a>
				<span>认证</span>
			</div>
			<div class="author-des">
				本小编负责转载分享优秀的文章资源,仅供学习与交流,如果不小心侵犯到您的权益,请及时联系站长删除该资源。如果您有干货要分享，非常欢迎您的投稿。
			</div>
			<div class="author-social">
							<span class="author-blog">
								<a href="http://www.baidu.com"  rel="nofollow" target="_blank">
									<i class="fa fa-home"></i>博客
								</a>
							</span>
				<span class="author-weibo">
								<a href="http://weibo.com/" rel="nofollow" target="_blank">
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
					<li>
						<a href="http://www.hhqblog.com/cydz/182.html" title="O2O创业：城会玩，“轻食记”撬动城市轻生活" class='tab_post_title'>
							<span class='post_i num1'> 1</span> O2O创业：城会玩，“轻食记”撬动城市轻生活
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cydz/182.html" title="O2O创业：城会玩，“轻食记”撬动城市轻生活" class='tab_post_title'>
							<span class='post_i num1'> 1</span> O2O创业：城会玩，“轻食记”撬动城市轻生活
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cydz/182.html" title="O2O创业：城会玩，“轻食记”撬动城市轻生活" class='tab_post_title'>
							<span class='post_i num1'> 1</span> O2O创业：城会玩，“轻食记”撬动城市轻生活
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cydz/182.html" title="O2O创业：城会玩，“轻食记”撬动城市轻生活" class='tab_post_title'>
							<span class='post_i num1'> 1</span> O2O创业：城会玩，“轻食记”撬动城市轻生活
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cydz/182.html" title="O2O创业：城会玩，“轻食记”撬动城市轻生活" class='tab_post_title'>
							<span class='post_i num1'> 1</span> O2O创业：城会玩，“轻食记”撬动城市轻生活
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cydz/182.html" title="O2O创业：城会玩，“轻食记”撬动城市轻生活" class='tab_post_title'>
							<span class='post_i num1'> 1</span> O2O创业：城会玩，“轻食记”撬动城市轻生活
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cydz/182.html" title="O2O创业：城会玩，“轻食记”撬动城市轻生活" class='tab_post_title'>
							<span class='post_i num1'> 1</span> O2O创业：城会玩，“轻食记”撬动城市轻生活
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cydz/182.html" title="O2O创业：城会玩，“轻食记”撬动城市轻生活" class='tab_post_title'>
							<span class='post_i num1'> 1</span> O2O创业：城会玩，“轻食记”撬动城市轻生活
						</a>
					</li>
				</ul>
			</div>
			<div class="investment_con_list">
				<ul class="tab_post_links">
					<li>
						<a href="http://www.hhqblog.com/cyzx/535.html" title="准备在杭州创业？这15家在杭投资机构不能错过" class='tab_post_title'>
							<span class='post_i num1'> 2 </span> 准备在杭州创业？这15家在杭投资机构不能错过
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cyzx/535.html" title="准备在杭州创业？这15家在杭投资机构不能错过" class='tab_post_title'>
							<span class='post_i num1'> 2 </span> 准备在杭州创业？这15家在杭投资机构不能错过
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cyzx/535.html" title="准备在杭州创业？这15家在杭投资机构不能错过" class='tab_post_title'>
							<span class='post_i num1'> 2 </span> 准备在杭州创业？这15家在杭投资机构不能错过
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cyzx/535.html" title="准备在杭州创业？这15家在杭投资机构不能错过" class='tab_post_title'>
							<span class='post_i num1'> 2 </span> 准备在杭州创业？这15家在杭投资机构不能错过
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cyzx/535.html" title="准备在杭州创业？这15家在杭投资机构不能错过" class='tab_post_title'>
							<span class='post_i num1'> 2 </span> 准备在杭州创业？这15家在杭投资机构不能错过
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cyzx/535.html" title="准备在杭州创业？这15家在杭投资机构不能错过" class='tab_post_title'>
							<span class='post_i num1'> 2 </span> 准备在杭州创业？这15家在杭投资机构不能错过
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cyzx/535.html" title="准备在杭州创业？这15家在杭投资机构不能错过" class='tab_post_title'>
							<span class='post_i num1'> 2 </span> 准备在杭州创业？这15家在杭投资机构不能错过
						</a>
					</li>
					<li>
						<a href="http://www.hhqblog.com/cyzx/535.html" title="准备在杭州创业？这15家在杭投资机构不能错过" class='tab_post_title'>
							<span class='post_i num1'> 2 </span> 准备在杭州创业？这15家在杭投资机构不能错过
						</a>
					</li>
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
			<li>
				<a href="http://www.hhqblog.com/cyzx/512.html" title="华人创业在硅谷：遭遇天花板 纷纷选择回国">
					<div class="hotpost-img">
						<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="华人创业在硅谷：遭遇天花板 纷纷选择回国" class="thumbnail"/>
					</div>
					<div class="hotpost-left">
						<span class="hot-post-title"> 华人创业在硅谷：遭遇天花板 纷纷选择回国</span>
						<span class="hot-post-info"><i class="fa fa-clock"></i>2016-01-01 </span>
						<span class="hot-post-info"><i class="fa fa-eye"></i> 1038 </span>
					</div>
				</a>
			</li>
			<li>
				<a href="http://www.hhqblog.com/cyzx/512.html" title="华人创业在硅谷：遭遇天花板 纷纷选择回国">
					<div class="hotpost-img">
						<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="华人创业在硅谷：遭遇天花板 纷纷选择回国" class="thumbnail"/>
					</div>
					<div class="hotpost-left">
						<span class="hot-post-title"> 华人创业在硅谷：遭遇天花板 纷纷选择回国</span>
						<span class="hot-post-info"><i class="fa fa-clock"></i>2016-01-01 </span>
						<span class="hot-post-info"><i class="fa fa-eye"></i> 1038 </span>
					</div>
				</a>
			</li>
			<li>
				<a href="http://www.hhqblog.com/cyzx/512.html" title="华人创业在硅谷：遭遇天花板 纷纷选择回国">
					<div class="hotpost-img">
						<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="华人创业在硅谷：遭遇天花板 纷纷选择回国" class="thumbnail"/>
					</div>
					<div class="hotpost-left">
						<span class="hot-post-title"> 华人创业在硅谷：遭遇天花板 纷纷选择回国</span>
						<span class="hot-post-info"><i class="fa fa-clock"></i>2016-01-01 </span>
						<span class="hot-post-info"><i class="fa fa-eye"></i> 1038 </span>
					</div>
				</a>
			</li>
			<li>
				<a href="http://www.hhqblog.com/cyzx/512.html" title="华人创业在硅谷：遭遇天花板 纷纷选择回国">
					<div class="hotpost-img">
						<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="华人创业在硅谷：遭遇天花板 纷纷选择回国" class="thumbnail"/>
					</div>
					<div class="hotpost-left">
						<span class="hot-post-title"> 华人创业在硅谷：遭遇天花板 纷纷选择回国</span>
						<span class="hot-post-info"><i class="fa fa-clock"></i>2016-01-01 </span>
						<span class="hot-post-info"><i class="fa fa-eye"></i> 1038 </span>
					</div>
				</a>
			</li>
			<li>
				<a href="http://www.hhqblog.com/cyzx/512.html" title="华人创业在硅谷：遭遇天花板 纷纷选择回国">
					<div class="hotpost-img">
						<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="华人创业在硅谷：遭遇天花板 纷纷选择回国" class="thumbnail"/>
					</div>
					<div class="hotpost-left">
						<span class="hot-post-title"> 华人创业在硅谷：遭遇天花板 纷纷选择回国</span>
						<span class="hot-post-info"><i class="fa fa-clock"></i>2016-01-01 </span>
						<span class="hot-post-info"><i class="fa fa-eye"></i> 1038 </span>
					</div>
				</a>
			</li>
			<li>
				<a href="http://www.hhqblog.com/cyzx/512.html" title="华人创业在硅谷：遭遇天花板 纷纷选择回国">
					<div class="hotpost-img">
						<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="华人创业在硅谷：遭遇天花板 纷纷选择回国" class="thumbnail"/>
					</div>
					<div class="hotpost-left">
						<span class="hot-post-title"> 华人创业在硅谷：遭遇天花板 纷纷选择回国</span>
						<span class="hot-post-info"><i class="fa fa-clock"></i>2016-01-01 </span>
						<span class="hot-post-info"><i class="fa fa-eye"></i> 1038 </span>
					</div>
				</a>
			</li>
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
		<h2><i class="fa fa-th-list"></i>广而告之</h2>
		<div class="textwidget">
			<div class="textwidget">
				<table width="300" height="250" bgcolor="#33CCCC">
					<tr align="center" style="line-height: 250px;">
						<td>后台-插件-广告管理-侧边广告位二</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
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
				<li class="ft1"><img src="/skin/ecms118/images/weixin.jpg"></li>
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
					<div id="wximg" style="display:none;"><img src="/skin/ecms118/images/weixin.jpg"></div>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
	</div>
	<div class="credit"> Copyright © 2014-2017&nbsp;<a class="site-link" href="http://www.hanhqtest.com/" title="韩会强博客"
	                                                   rel="home">
		韩会强博客 </a>&nbsp;丨 <a href="http://www.miitbeian.gov.cn" rel="external nofollow" target="_blank">
		京ICP1234567-2号 </a>&nbsp;丨
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

</script>
<!--ADD_CODE_FOOTER_START-->
<script type="text/javascript" src="__JS__/add.js"></script>
<script src="/static/admin/js/laypage/laypage.js"></script>
<script src="/static/admin/js/laytpl/laytpl.js"></script>
<!--ADD_CODE_FOOTER_END-->
<a href="#0" class="cd-top">Top</a>
<div class="adm" style="display: none;"></div>
<div class="hotarticlead"> <!--右下角广告或者弹窗或者对联广告可以放这里 --> </div>

</body>
</html>