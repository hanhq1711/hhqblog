<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:71:"E:\phpStudy\WWW\hblog\public/../application/index\view\index\index.html";i:1493382444;s:71:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\base.html";i:1493212498;s:73:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\header.html";i:1493211437;s:72:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\right.html";i:1493382444;s:73:"E:\phpStudy\WWW\hblog\public/../application/index\view\public\footer.html";i:1490975543;}*/ ?>
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
	
<div id="sitenews-wrap">
	<div class="contextual bg-sitenews"><i class="fa fa-volume-up" style=""></i>
		<div id="news-scroll-zone">
			<div class="news-scroll-list">
				<?php if(is_array($top_line) || $top_line instanceof \think\Collection || $top_line instanceof \think\Paginator): if( count($top_line)==0 ) : echo "" ;else: foreach($top_line as $key=>$top): ?>
				<li class="sitenews-list"><a href="<?php echo url('index/Artical/detail',['id'=>$top['id']]); ?>" target="_blank">
					<?php echo $top['title']; ?></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<span class="infobg-close" style="color:#aaa;"><i class="fa fa-close"></i></span></div>
</div>

	<div id="main" class="clearfix">
		<div id="wrap">
			
			<div id="article">
				<div class="metro">
					<div class="suxing_home_slider">
						<ul id="suxingmeindexslider">
							<?php if(is_array($carousel) || $carousel instanceof \think\Collection || $carousel instanceof \think\Paginator): if( count($carousel)==0 ) : echo "" ;else: foreach($carousel as $key=>$car): ?>
							<li><a class="item" href="<?php echo url('index/Artical/detail',['id'=>$car['id']]); ?>" target="_blank"
							       title="疯狂扩张、收缩战线，校园O2O冰火两重天">
								<div class="gradient"></div>
								<img src="<?php echo config('webinfo.host_domain'); ?><?php echo config('webinfo.qiniu_url'); ?><?php echo $car['photo']; ?>-hhqblog"
								     alt="<?php echo $car['title']; ?>" title="<?php echo $car['title']; ?>"/>
								<h2 class="title"><span>
                  <?php echo $car['title']; ?>                  </span></h2>
							</a></li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
				<div class="posts">
					<script id="list-template" type="text/html">
						{{# for(var i=0;i<d.length;i++){  }}
					<div class="loop">
						<div class="content-img">
							<a href="<?php echo config('webinfo.weburl'); ?>ar/{{d[i].id}}" title="{{d[i].title}}">
								<img src="<?php echo config('webinfo.host_domain'); ?><?php echo config('webinfo.qiniu_url'); ?>{{d[i].photo}}-hhqblog" alt="{{d[i].title}}" class="thumbnail"/>
							</a>
							<span class="cat">
								<a href="<?php echo url('Artical/detail','',false); ?>/id/{{d[i].id}}">{{d[i].name}}</a>
							</span>
						</div>
						<div class="content_body">
							<h2>
								<a href="<?php echo config('webinfo.weburl'); ?>ar/{{d[i].id}}" title="{{d[i].title}}">{{d[i].title}}</a>
							</h2>
							<p> 导读 :
								{{d[i].remark}}
							</p>
						</div>
						<span class="title-l"></span>
						<div class="clear"></div>
						<div class="content_infor">
							<span class="more">
								<a href="<?php echo config('webinfo.weburl'); ?>ar/{{d[i].id}}"  title="阅读全文">阅读全文 <i class="fa fa-chevron-circle-right" style="font-size: 13px;"></i>
								</a>
							</span>
							<span class="auther">
								<a href="javascript:;" class="post-author mr15">
									<img alt="admin" src="__IMG__/676a058a500db64d6b3acf572e1b94af.jpg" class="avatar avatar-96 photo" height="96" width="96"/>{{d[i].auth}}
								</a>
							</span>
							<span><i class="fa fa-clock-o"></i> {{d[i].create_time}}
							</span>
							<span><i class="fa fa-eye"></i> {{d[i].views}}人参与
							</span>
							<span> <i class="fa fa-comment"></i>
									<a href="http://www.hanhqtest.com/cyzx/532.html#comments" title="评论">
										100条评论
									</a>
							</span>
							<span>
								<a title="喜欢就赞一个！" href="JavaScript:void(0)" class="favorite">
									<i class="fa fa-thumbs-o-up" style="color:#f66"></i>
									<span class="count" id="diggnum532">{{d[i].like}}</span>
								</a>
							</span>
						</div>
					</div>
						{{# } }}
					</script>
					<div id="list-content"></div>
				</div>
				<div id="page">
					<div class="AjaxPage"></div>
				</div>
				<!-- CMS -->
				<!--<div class="line-small">
					<div class="xl2 xm2">
						<div class="cat-box">
							<h3 class="cat-title">
								<a href="http://www.hanhqtest.com/cyzx/" title="创业资讯">
									<i class="fa fa-th-list"></i> 创业资讯
								</a>
							</h3>
							<div class="clear"></div>
							<div class="cat-site">
								<h2 class="entry-title">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" rel="bookmark">
									测试内容页下载功能
									</a>
								</h2>
								<figure class="thumbnail">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" title="测试内容页下载功能">
										<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="测试内容页下载功能" class="thumbnail"/>
									</a>
								</figure>
								<div class="cat-main">
									测试内容页下载功能 ...
								</div>
								<div class="clear"></div>
								<ul class="cat-list">
                                    <span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/535.html" rel="bookmark">
										准备在杭州创业？这15家在杭投资机构不能错过
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/532.html" rel="bookmark">
										疯狂扩张、收缩战线，校园O2O冰火两重天
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/534.html" rel="bookmark">
										一个草根微商暴富梦破：几个月8万亏一半 重回工厂打工
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/533.html" rel="bookmark">
										盘点“中国特色”：67个创业项目抢食3大二手回收产业
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="xl2 xm2">
						<div class="cat-box">
							<h3 class="cat-title">
								<a href="http://www.hanhqtest.com/cyzx/" title="创业资讯">
									<i class="fa fa-th-list"></i> 创业资讯
								</a>
							</h3>
							<div class="clear"></div>
							<div class="cat-site">
								<h2 class="entry-title">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" rel="bookmark">
										测试内容页下载功能
									</a>
								</h2>
								<figure class="thumbnail">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" title="测试内容页下载功能">
										<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="测试内容页下载功能" class="thumbnail"/>
									</a>
								</figure>
								<div class="cat-main">
									测试内容页下载功能 ...
								</div>
								<div class="clear"></div>
								<ul class="cat-list">
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/535.html" rel="bookmark">
											准备在杭州创业？这15家在杭投资机构不能错过
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/532.html" rel="bookmark">
											疯狂扩张、收缩战线，校园O2O冰火两重天
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/534.html" rel="bookmark">
											一个草根微商暴富梦破：几个月8万亏一半 重回工厂打工
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/533.html" rel="bookmark">
											盘点“中国特色”：67个创业项目抢食3大二手回收产业
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="xl2 xm2">
						<div class="cat-box">
							<h3 class="cat-title">
								<a href="http://www.hanhqtest.com/cyzx/" title="创业资讯">
									<i class="fa fa-th-list"></i> 创业资讯
								</a>
							</h3>
							<div class="clear"></div>
							<div class="cat-site">
								<h2 class="entry-title">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" rel="bookmark">
										测试内容页下载功能
									</a>
								</h2>
								<figure class="thumbnail">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" title="测试内容页下载功能">
										<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="测试内容页下载功能" class="thumbnail"/>
									</a>
								</figure>
								<div class="cat-main">
									测试内容页下载功能 ...
								</div>
								<div class="clear"></div>
								<ul class="cat-list">
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/535.html" rel="bookmark">
											准备在杭州创业？这15家在杭投资机构不能错过
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/532.html" rel="bookmark">
											疯狂扩张、收缩战线，校园O2O冰火两重天
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/534.html" rel="bookmark">
											一个草根微商暴富梦破：几个月8万亏一半 重回工厂打工
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/533.html" rel="bookmark">
											盘点“中国特色”：67个创业项目抢食3大二手回收产业
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="xl2 xm2">
						<div class="cat-box">
							<h3 class="cat-title">
								<a href="http://www.hanhqtest.com/cyzx/" title="创业资讯">
									<i class="fa fa-th-list"></i> 创业资讯
								</a>
							</h3>
							<div class="clear"></div>
							<div class="cat-site">
								<h2 class="entry-title">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" rel="bookmark">
										测试内容页下载功能
									</a>
								</h2>
								<figure class="thumbnail">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" title="测试内容页下载功能">
										<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="测试内容页下载功能" class="thumbnail"/>
									</a>
								</figure>
								<div class="cat-main">
									测试内容页下载功能 ...
								</div>
								<div class="clear"></div>
								<ul class="cat-list">
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/535.html" rel="bookmark">
											准备在杭州创业？这15家在杭投资机构不能错过
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/532.html" rel="bookmark">
											疯狂扩张、收缩战线，校园O2O冰火两重天
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/534.html" rel="bookmark">
											一个草根微商暴富梦破：几个月8万亏一半 重回工厂打工
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/533.html" rel="bookmark">
											盘点“中国特色”：67个创业项目抢食3大二手回收产业
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="xl2 xm2">
						<div class="cat-box">
							<h3 class="cat-title">
								<a href="http://www.hanhqtest.com/cyzx/" title="创业资讯">
									<i class="fa fa-th-list"></i> 创业资讯
								</a>
							</h3>
							<div class="clear"></div>
							<div class="cat-site">
								<h2 class="entry-title">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" rel="bookmark">
										测试内容页下载功能
									</a>
								</h2>
								<figure class="thumbnail">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" title="测试内容页下载功能">
										<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="测试内容页下载功能" class="thumbnail"/>
									</a>
								</figure>
								<div class="cat-main">
									测试内容页下载功能 ...
								</div>
								<div class="clear"></div>
								<ul class="cat-list">
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/535.html" rel="bookmark">
											准备在杭州创业？这15家在杭投资机构不能错过
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/532.html" rel="bookmark">
											疯狂扩张、收缩战线，校园O2O冰火两重天
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/534.html" rel="bookmark">
											一个草根微商暴富梦破：几个月8万亏一半 重回工厂打工
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/533.html" rel="bookmark">
											盘点“中国特色”：67个创业项目抢食3大二手回收产业
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="xl2 xm2">
						<div class="cat-box">
							<h3 class="cat-title">
								<a href="http://www.hanhqtest.com/cyzx/" title="创业资讯">
									<i class="fa fa-th-list"></i> 创业资讯
								</a>
							</h3>
							<div class="clear"></div>
							<div class="cat-site">
								<h2 class="entry-title">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" rel="bookmark">
										测试内容页下载功能
									</a>
								</h2>
								<figure class="thumbnail">
									<a href="http://www.hanhqtest.com/cyzx/2016-10-24/540.html" title="测试内容页下载功能">
										<img src="__IMG__/3c1cfafbca8ef890f0e90b1475d234ff.jpg" alt="测试内容页下载功能" class="thumbnail"/>
									</a>
								</figure>
								<div class="cat-main">
									测试内容页下载功能 ...
								</div>
								<div class="clear"></div>
								<ul class="cat-list">
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/535.html" rel="bookmark">
											准备在杭州创业？这15家在杭投资机构不能错过
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/532.html" rel="bookmark">
											疯狂扩张、收缩战线，校园O2O冰火两重天
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/534.html" rel="bookmark">
											一个草根微商暴富梦破：几个月8万亏一半 重回工厂打工
										</a>
									</li>
									<span class="list-date"> 01/01</span>
									<li class="list-title">
										<i class="fa fa-angle-right"></i>
										<a href="http://www.hanhqtest.com/cyzx/533.html" rel="bookmark">
											盘点“中国特色”：67个创业项目抢食3大二手回收产业
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>-->
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

<script type="text/javascript" src="__JS__/responsiveslides.min.js"></script>
<script>
	$(function(){
        $('#suxingmeindexslider').responsiveSlides({
            pager: true,
            nav: true,
            namespace: 'centered-btns'
        });
	    ajax_page();
	});
    //以下将以jquery.ajax为例，演示一个异步分页
    function ajax_page(curr) {
        $.getJSON('<?php echo url("Index/index"); ?>', {
            page: curr || 1
        }, function (data) {      //data是后台返回过来的JSON数据
                var tpl = document.getElementById('list-template').innerHTML;
                laytpl(tpl).render(data, function (html) {
                    document.getElementById('list-content').innerHTML = html;
                });
                laypage({
                    cont: $('.AjaxPage'),//容器。值支持id名、原生dom对象，jquery对象,
                    pages: '<?php echo $allpage; ?>',//总页数
                    skip: true,//是否开启跳页
                    skin: '#32a5e7',//分页组件颜色
                    curr: curr || 1,
					allpage:true,
                    groups: 5,//连续显示分页数
                    jump: function (obj, first) {
                        if (!first) {
                            ajax_page(obj.curr)
                        }
                    }
                });
        });
    }
</script>

</body>
</html>