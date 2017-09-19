<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:73:"E:\phpStudy\WWW\hblog\public/../application/index\view\artical\lists.html";i:1493213667;s:71:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\base.html";i:1493212498;s:73:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\header.html";i:1493211437;s:72:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\right.html";i:1493212498;s:73:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\footer.html";i:1490975543;}*/ ?>
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
	<div class="posts">
		<div class="loop">
			<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/165.html" title="一张图告诉你损失一个中层可能损失200万的价值"> <img src="/d/file/2016-01-01/767067f8a795181d196982de3eabd20a.jpg" alt="一张图告诉你损失一个中层可能损失200万的价值" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
			<div class="content_body">
				<h2><a href="http://www.hanhqtest.com/cyzd/165.html" title="一张图告诉你损失一个中层可能损失200万的价值">一张图告诉你损失一个中层可能损失200万的价值</a> </h2>
				<p> 万万没想到，一个中层离职损失竟然超过200万？想知道你为什么赚不到钱，留不住人吗？ 文/爱员工... </p>
			</div>
			<span class="title-l"></span>
			<div class="clear"></div>
			<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/165.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=165></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/165.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/165.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=165&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=165&dotop=1&doajax=1&ajaxarea=diggnum165','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum165"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=165&down=5></script></span> </a> </span> </div>
		</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/135.html" title="做老板最高境界：谋局者，越清闲越赚钱"> <img src="/d/file/2016-01-01/709c7db256b13c55e24f49c633be093d.jpg" alt="做老板最高境界：谋局者，越清闲越赚钱" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/135.html" title="做老板最高境界：谋局者，越清闲越赚钱">做老板最高境界：谋局者，越清闲越赚钱</a> </h2>
			<p> 活是人干出来的，钱是人想出来的。越干活的人越穷，越思想的人就越富有。 钱是想出来的 很多人都喜欢做老板，但都是小老板，老板总是做不大。为什么做不大，我认为到一定程度以后，企... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/135.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=135></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/135.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/135.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=135&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=135&dotop=1&doajax=1&ajaxarea=diggnum135','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum135"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=135&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/143.html" title="家装市场备受质疑，互联网改造是否还有机会？"> <img src="/d/file/2016-01-01/ab42d9449081d312cc3c099faf8dcfac.jpg" alt="家装市场备受质疑，互联网改造是否还有机会？" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/143.html" title="家装市场备受质疑，互联网改造是否还有机会？">家装市场备受质疑，互联网改造是否还有机会？</a> </h2>
			<p> 对于互联网家装来讲，它是日益没落的房地产业与痛点百出的传统家装行业的孪生体。它不仅担负着延续后房地产时代辉煌的责任，更加担负着重塑传统家装业在人们心目当中印象的重... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/143.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=143></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/143.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/143.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=143&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=143&dotop=1&doajax=1&ajaxarea=diggnum143','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum143"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=143&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/155.html" title="六大微商平台运营模式解析，唯有“招下层代理”模式才能长"> <img src="/d/file/2016-01-01/bd49d0bb105c00ac71e9a6bb3c500c9f.jpg" alt="六大微商平台运营模式解析，唯有“招下层代理”模式才能长" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/155.html" title="六大微商平台运营模式解析，唯有“招下层代理”模式才能长">六大微商平台运营模式解析，唯有“招下层代理”模式才能长</a> </h2>
			<p> 目前微商处于变革期，经历了前一段断崖式下滑的悲惨期，至今还未有回过神来，但是，能够明显的感受到微商一直在演变，最初比较火的极享平台，后来又是思埠的云微商，这些平台到底是不是... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/155.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=155></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/155.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/155.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=155&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=155&dotop=1&doajax=1&ajaxarea=diggnum155','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum155"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=155&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/128.html" title="创业，一个从家狗变成狼的过程"> <img src="/d/file/2016-01-01/90b6b993c1039b449134f00ba4737c33.jpg" alt="创业，一个从家狗变成狼的过程" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/128.html" title="创业，一个从家狗变成狼的过程">创业，一个从家狗变成狼的过程</a> </h2>
			<p> 创业是把一条家狗变成一只狼的过程。你一旦习惯狼的生活以后，要想回到家犬的状态这是几乎不可能的。创业必须付出行动，光靠看书不会起到太大作用。在创业这条路上实践比理论... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/128.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=128></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/128.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/128.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=128&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=128&dotop=1&doajax=1&ajaxarea=diggnum128','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum128"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=128&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/132.html" title="刘官华：科学管理“已死”，不确定性“受宠”"> <img src="/d/file/2016-01-01/30731a79eb345971fb9aa0c272e9680a.jpg" alt="刘官华：科学管理“已死”，不确定性“受宠”" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/132.html" title="刘官华：科学管理“已死”，不确定性“受宠”">刘官华：科学管理“已死”，不确定性“受宠”</a> </h2>
			<p> 经典科学管理理论的核心是假定企业领导在运用一系列强大的分析工具后，能够准确预测任何业务的前景，从而选择明确的业务发展方向。该过程通常要人们在低估不确定性的情况下，勾... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/132.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=132></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/132.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/132.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=132&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=132&dotop=1&doajax=1&ajaxarea=diggnum132','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum132"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=132&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/138.html" title="千万用户背后与抠门、人味和转型有关的Keep运营故事"> <img src="/d/file/2016-01-01/25636aaacb2ecd7d23067d6871803ee5.jpg" alt="千万用户背后与抠门、人味和转型有关的Keep运营故事" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/138.html" title="千万用户背后与抠门、人味和转型有关的Keep运营故事">千万用户背后与抠门、人味和转型有关的Keep运营故事</a> </h2>
			<p> 第二次见到Keep的创始人王宁，是在箭厂胡同一家名为“塞”的特色餐厅。“塞”的历史已有十年之久，这家面积不大的小店以烹制欧洲香肠闻名，加上风味独到的精酿啤酒，满足了文艺青... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/138.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=138></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/138.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/138.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=138&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=138&dotop=1&doajax=1&ajaxarea=diggnum138','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum138"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=138&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/152.html" title="刘官华：产品上线前如何搭建团队运营体系？"> <img src="/d/file/2016-01-01/3f349420936afbb1b718bc4819beb5bf.jpg" alt="刘官华：产品上线前如何搭建团队运营体系？" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/152.html" title="刘官华：产品上线前如何搭建团队运营体系？">刘官华：产品上线前如何搭建团队运营体系？</a> </h2>
			<p> 朋友通过“在行”找到我咨询产品运营的方法，于是在某个下午的时间大家坐在一起闲聊。讨论中得知团队在做一款防伪产品，立项是根据创始人的行业客户的讨论中决定做这个产品。... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/152.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=152></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/152.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/152.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=152&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=152&dotop=1&doajax=1&ajaxarea=diggnum152','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum152"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=152&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/122.html" title="100个创业者中95个会死掉，没干爹的孩子如何避免成炮灰?"> <img src="/d/file/2016-01-01/6c538c90357d97d8c9893e180f4b22e2.jpg" alt="100个创业者中95个会死掉，没干爹的孩子如何避免成炮灰?" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/122.html" title="100个创业者中95个会死掉，没干爹的孩子如何避免成炮灰?">100个创业者中95个会死掉，没干爹的孩子如何避免成炮灰?</a> </h2>
			<p> 当前人们纷纷被鼓动创业，去创造各种需求，不管这事能不能成先让人上，找谁呢？刚毕业的学生，在职工作着被拉着离职，还有各路大神大仙大鬼。各类创业大赛一个接一个，创投机构、资本，生... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/122.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=122></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/122.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/122.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=122&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=122&dotop=1&doajax=1&ajaxarea=diggnum122','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum122"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=122&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/125.html" title="汽车后市场之途虎：如何成为养车O2O市场幸存者的"> <img src="/d/file/2016-01-01/2402436d154ccb0f73a9c148627a2a02.jpg" alt="汽车后市场之途虎：如何成为养车O2O市场幸存者的" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/125.html" title="汽车后市场之途虎：如何成为养车O2O市场幸存者的">汽车后市场之途虎：如何成为养车O2O市场幸存者的</a> </h2>
			<p> 作为汽车后市场的幸存者，陈敏的逻辑很简单也很难：不讲情怀，不画饼，不忽悠，只简简单单地把养车看作一门生意。早上八点半，途虎养车上海总部办公室空空荡荡，一个穿着蓝色冲锋衣的年... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/125.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=125></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/125.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/125.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=125&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=125&dotop=1&doajax=1&ajaxarea=diggnum125','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum125"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=125&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/115.html" title="创业老板的N种死法：高调吹牛也会死得很惨">创业老板的N种死法：高调吹牛也会死得很惨</a> </h2>
			<p> 100个失败的创业者，也许会有101种死法。看看近年来这些黯然离开或亲手关闭自己创业公司的老板们，到底都有哪些花样死法？ 想让自己的公司活下去？股权、观念、团队、吹牛……，不用... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/115.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=115></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/115.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/115.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=115&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=115&dotop=1&doajax=1&ajaxarea=diggnum115','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum115"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=115&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/119.html" title="田里：梦想其实没有那么贵 好的创业者根本不需要烧钱"> <img src="/d/file/2016-01-01/1dd5841a8bfb9676a80bdd900ead647f.jpg" alt="田里：梦想其实没有那么贵 好的创业者根本不需要烧钱" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/119.html" title="田里：梦想其实没有那么贵 好的创业者根本不需要烧钱">田里：梦想其实没有那么贵 好的创业者根本不需要烧钱</a> </h2>
			<p> 资本冬天的论调不绝于耳，大批 O2O 企业面临钱荒甚至不得不关张。招聘节流：早期用股权吸引价值观一致的人中国正在进入一个老龄化社会，这带来的副作用是劳动力的供给减少，并带来... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/119.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=119></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/119.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/119.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=119&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=119&dotop=1&doajax=1&ajaxarea=diggnum119','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum119"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=119&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/146.html" title="《速腾汽车美容公司》创业计划书分享"> <img src="/d/file/2016-01-01/8d51c1caff411163883e1f7311786a26.png" alt="《速腾汽车美容公司》创业计划书分享" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/146.html" title="《速腾汽车美容公司》创业计划书分享">《速腾汽车美容公司》创业计划书分享</a> </h2>
			<p> 执行总结在当前全国高校关于素质教育、创新能力大讨论的背景下，我们以“创新”“创业”为指针，充分利用现有资料和网络资源进行市场分析、相关人士咨询以及建立数学模型等方... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/146.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=146></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/146.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/146.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=146&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=146&dotop=1&doajax=1&ajaxarea=diggnum146','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum146"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=146&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/108.html" title="O2O或可彻底改变传统奢侈品零售模式">O2O或可彻底改变传统奢侈品零售模式</a> </h2>
			<p> 最近两年，奢侈品行业在中国的日子并不好过：传统奢侈品零售相继进入“关店模式”，获资本青睐的奢侈品电商却无法在高资产人群中打开市场。不过，这一切或许能通过连接门店和线上... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/108.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=108></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/108.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/108.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=108&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=108&dotop=1&doajax=1&ajaxarea=diggnum108','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum108"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=108&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/112.html" title="总结这20个利用人性弱点运营技巧"> <img src="/d/file/2016-01-01/93d50eee7cbf854471280d9184fcb314.jpg" alt="总结这20个利用人性弱点运营技巧" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/112.html" title="总结这20个利用人性弱点运营技巧">总结这20个利用人性弱点运营技巧</a> </h2>
			<p> “宇宙的精灵，万物的灵长”，说的是人类。但现实中，人性的弱点也不少：贪婪、恐惧、嫉妒、懒惰、好色、贪慕虚荣、难抵诱惑、害怕孤独、热爱免费、重视等级、迷信专家、崇拜名人... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/112.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=112></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/112.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/112.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=112&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=112&dotop=1&doajax=1&ajaxarea=diggnum112','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum112"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=112&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/139.html" title="看看网易云音乐是如何运营用户评论？"> <img src="/d/file/2016-01-01/26b02d2af9c5a8be3a12b026fa7fb9ac.jpg" alt="看看网易云音乐是如何运营用户评论？" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/139.html" title="看看网易云音乐是如何运营用户评论？">看看网易云音乐是如何运营用户评论？</a> </h2>
			<p> 在四大门户网站之中，网易新闻的评论氛围是最好的，概莫能及。而到了移动互联网时代，网易云音乐推出较晚，但很多地方表现突出，又打造了一个非常有评论氛围的产品。到底网易云音乐... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/139.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=139></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/139.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/139.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=139&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=139&dotop=1&doajax=1&ajaxarea=diggnum139','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum139"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=139&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/100.html" title="8成用户一个月删掉APP，校园社交怎么留住小鲜肉们？"> <img src="/d/file/2016-01-01/a4083755ddf41959c55a9148a967c04e.jpg" alt="8成用户一个月删掉APP，校园社交怎么留住小鲜肉们？" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/100.html" title="8成用户一个月删掉APP，校园社交怎么留住小鲜肉们？">8成用户一个月删掉APP，校园社交怎么留住小鲜肉们？</a> </h2>
			<p> 在这个智能手机时代日新月异，各型各款的社交类APP火热地充斥在人们的生活当中。据《2015中国手机APP市场研究报告》显示，最受欢迎的APP种类为通讯与社交类，占比达到了64.1%，而... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/100.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=100></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/100.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/100.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=100&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=100&dotop=1&doajax=1&ajaxarea=diggnum100','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum100"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=100&down=5></script></span> </a> </span> </div>
	</div><div class="loop">
		<div class="content-img"> <a href="http://www.hanhqtest.com/cyzd/105.html" title="淘宝店服装生意进货经典案例，6年居然赚600万！"> <img src="/d/file/2016-01-01/d9977c8a1efec603f95d31543a651f6a.jpg" alt="淘宝店服装生意进货经典案例，6年居然赚600万！" class="thumbnail" /> </a> <span class="cat"><a href="http://www.hanhqtest.com/cyzd/">创业指导</a></span> </div>
		<div class="content_body">
			<h2><a href="http://www.hanhqtest.com/cyzd/105.html" title="淘宝店服装生意进货经典案例，6年居然赚600万！">淘宝店服装生意进货经典案例，6年居然赚600万！</a> </h2>
			<p> 前段时间，一个朋友吐槽，在我这里抱怨服装生意不好做，转店、装修、进货、租金、工资等等等压的她灰头土脸的，今天无意间在一个论坛里看到的,感觉堪称作服装生意进货经典。6年赚6... </p>
		</div>
		<span class="title-l"></span>
		<div class="clear"></div>
		<div class="content_infor"> <span class="more"><a href="http://www.hanhqtest.com/cyzd/105.html" title="阅读全文" >阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i></a></span> <span class="auther"><a href="http://www.hanhqtest.com/e/space/listuseract.php?mid=1&tempid=11&userid=1" class="post-author mr15"><img alt="admin" src="/d/file/2016-10-23/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96" />admin</a></span> <span><i class="fa fa-clock-o"></i> 2016-01-01</span> <span><i class="fa fa-eye"></i> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=105></script> 人参与</span> <span> <i class="fa fa-comment"></i> <a href="http://www.hanhqtest.com/cyzd/105.html" title="评论"><a href="http://www.hanhqtest.com/cyzd/105.html#comments"> <script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=105&down=2></script></a> 条评论 </a></span> <span> <a title="喜欢就赞一个！" href="JavaScript:makeRequest('http://www.hanhqtest.com/e/public/digg?classid=2&id=105&dotop=1&doajax=1&ajaxarea=diggnum105','EchoReturnedText','GET','');" class="favorite"> <i class="fa fa-thumbs-o-up" style="color:#f66"></i> <span class="count"  id="diggnum105"><script src=http://www.hanhqtest.com/e/public/ViewClick/?classid=2&id=105&down=5></script></span> </a> </span> </div>
	</div>
	</div>
	<div id="page"> <a class='page-numbers current'>1</a>  <a class="page-numbers" href="http://www.hanhqtest.com/cyzd/index_2.html">2</a>  <a class="page-numbers" href="http://www.hanhqtest.com/cyzd/index_3.html">3</a>  <a class="page-numbers" href="http://www.hanhqtest.com/cyzd/index_4.html">4</a>  <a class="page-numbers" href="http://www.hanhqtest.com/cyzd/index_5.html">5</a>  <a href="http://www.hanhqtest.com/cyzd/index_2.html" title="下一页" class="page-numbers">下一页</a>  <span class="page-numbers">共5页</span> </div>
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