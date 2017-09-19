<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"/yjdata/www/hhqblog/public/../application/admin/view/article/index.html";i:1493465477;s:71:"/yjdata/www/hhqblog/public/../application/admin/view/public/header.html";i:1493465479;s:71:"/yjdata/www/hhqblog/public/../application/admin/view/public/footer.html";i:1493465479;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('webinfo.web_site_title'); ?></title>
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style type="text/css">
    .long-tr th{
        text-align: center
    }
    .long-td td{
        text-align: center
    }
    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>文章列表</h5>
        </div>
        <div class="ibox-content">
            <!--搜索框开始-->           
            <div class="row">
                <div class="col-sm-12">   
                <div  class="col-sm-2" style="width: 100px">
                    <div class="input-group" >  
                        <a href="<?php echo url('add_article'); ?>"><button class="btn btn-outline btn-primary" type="button">添加文章</button></a> 
                    </div>
                </div>                                            
                    <form name="admin_list_sea" class="form-search" method="post" action="<?php echo url('index'); ?>">
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" id="key" class="form-control" name="keyword" value="<?php echo $keyword; ?>" placeholder="输入需查询的文章名称" />
                                <span class="input-group-btn"> 
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> 搜索</button> 
                                </span>
                            </div>
                        </div>
                    </form>                         
                </div>
            </div>
            <!--搜索框结束-->
            <div class="hr-line-dashed"></div>
            <div class="example-wrap">
                <div class="example">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="long-tr">
                                <th width="3%">ID</th>
                                <th width="15%">标题</th>
                                <th width="5%">所属分类</th>
                                <th width="5%">文章封面</th>
                                <th width="4%">浏览量</th>
                                <th width="10%">创建时间</th>
                                <th width="10%">更新时间</th>
                                <th width="5%">状态</th>
                                <th width="5%">是否推荐</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <script id="list-template" type="text/html">
                            {{# for(var i=0;i<d.length;i++){  }}
                                <tr class="long-td">
                                    <td>{{d[i].id}}</td>
                                    <td>{{d[i].title}}</td>
                                    <td>{{d[i].name}}</td>                                 
                                    <td><img src="<?php echo config('webinfo.host_domain'); ?><?php echo config('webinfo.qiniu_url'); ?>{{d[i].photo}}" style="height: 30px" onerror="this.src='/static/admin/images/no_img.jpg'"/></td>
                                    <td>{{d[i].views}}</td>
                                    <td>{{d[i].create_time}}</td> 
                                    <td>{{d[i].update_time}}</td>
                                    <td>
                                        {{# if(d[i].status==1){ }}
                                            <a href="javascript:;" onclick="article_state({{d[i].id}});">
                                                <div id="zt{{d[i].id}}"><span class="label label-info">开启</span></div>
                                            </a>
                                        {{# }else{ }}
                                            <a href="javascript:;" onclick="article_state({{d[i].id}});">
                                                <div id="zt{{d[i].id}}"><span class="label label-danger">禁用</span></div>
                                            </a>
                                        {{# } }}
                                    </td> 
                                    <td>
                                        {{# if(d[i].is_tui==1){ }}
                                        <a href="javascript:;" onclick="article_tui({{d[i].id}});">
                                            <div id="tj{{d[i].id}}"><span class="label label-info">是</span></div>
                                        </a>
                                        {{# }else{ }}
                                        <a href="javascript:;" onclick="article_tui({{d[i].id}});">
                                            <div id="tj{{d[i].id}}"><span class="label label-danger">否</span></div>
                                        </a>
                                        {{# } }}
                                    </td>                               
                                    <td>
                                        <a href="javascript:;" onclick="edit_article({{d[i].id}})" class="btn btn-primary btn-xs btn-outline">
                                            <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="del_article({{d[i].id}},Ajaxpage)" class="btn btn-danger btn-xs btn-outline">
                                            <i class="fa fa-trash-o"></i> 删除</a>
                                    </td>
                                </tr>
                            {{# } }}
                            {{#  if(d.length === 0){ }}
                            无数据
                            {{#  } }}
                        </script>
                        <tbody id="list-content"></tbody>
                    </table>
                    <div id="AjaxPage" style="text-align:right;"></div>
                    <div style="text-align: right;">
                        共<?php echo $count; ?>条数据，<span id="allpage"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- 加载动画 -->
<div class="spiner-example">
    <div class="sk-spinner sk-spinner-three-bounce">
        <div class="sk-bounce1"></div>
        <div class="sk-bounce2"></div>
        <div class="sk-bounce3"></div>
    </div>
</div>

<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/admin/js/content.min.js?v=1.0.0"></script>
<script src="/static/admin/js/plugins/chosen/chosen.jquery.js"></script>
<script src="/static/admin/js/plugins/iCheck/icheck.min.js"></script>
<script src="/static/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="/static/admin/js/plugins/switchery/switchery.js"></script><!--IOS开关样式-->
<script src="/static/admin/js/jquery.form.js"></script>
<script src="/static/admin/js/layer/layer.min.js"></script>
<script src="/static/admin/js/laypage/laypage.js"></script>
<script src="/static/admin/js/laytpl/laytpl.js"></script>
<script src="/static/admin/js/hhqblog.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>

<script type="text/javascript">
   
    /**
     * [Ajaxpage laypage分页]
     * @param {[type]} curr [当前页]
     */
    Ajaxpage();

    function Ajaxpage(curr){
        var key=$('#key').val();
        $.getJSON('<?php echo url("article/index"); ?>', {
            page: curr || 1,keyword:key
        }, function(data){      //data是后台返回过来的JSON数据
			$(".spiner-example").css('display','none'); //数据加载完关闭动画
            if(data==''){
                $("#list-content").html('<td colspan="20" style="padding-top:10px;padding-bottom:10px;font-size:16px;text-align:center">暂无数据</td>');
            }else{
                var tpl = document.getElementById('list-template').innerHTML;
                laytpl(tpl).render(data, function(html){
                    document.getElementById('list-content').innerHTML = html;
                });
                laypage({
                    cont: $('#AjaxPage'),//容器。值支持id名、原生dom对象，jquery对象,
                    pages:'<?php echo $allpage; ?>',//总页数
                    skip: true,//是否开启跳页
                    skin: '#1AB5B7',//分页组件颜色
                    curr: curr || 1,
                    groups: 3,//连续显示分页数
                    jump: function(obj, first){
                        if(!first){
                            Ajaxpage(obj.curr)
                        }
                        $('#allpage').html('第'+ obj.curr +'页，共'+ obj.pages +'页');
                    }
                });
            }
        });
    }
 

//编辑文章
function edit_article(id){
    location.href = "<?php echo url('edit_article','',false); ?>/id/"+id+"/html";
}

//删除文章
function del_article(id,callback){
    hhqblog.confirm(id,'<?php echo url("del_article"); ?>',callback);
}

//文章状态
function article_state(id){
    hhqblog.status(id,'<?php echo url("article_state"); ?>');
}
    //推荐
    function article_tui(id){
        hhqblog.tuijian(id,'<?php echo url("article_tui"); ?>');
    }
</script>
</body>
</html>