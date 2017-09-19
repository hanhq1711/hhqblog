<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"/yjdata/www/hhqblog/public/../application/admin/view/category/index.html";i:1493465477;s:71:"/yjdata/www/hhqblog/public/../application/admin/view/public/header.html";i:1493465479;s:71:"/yjdata/www/hhqblog/public/../application/admin/view/public/footer.html";i:1493465479;}*/ ?>
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
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>菜单列表</h5>
        </div>
        <div class="ibox-content">
            <div class="row">
                <div class="col-sm-12">
                    <div  class="col-sm-2">
                        <div class="input-group" >
                            <button type="button" class="btn btn-primary btn-outline" data-toggle="modal" data-target="#myModal">添加菜单</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="example-wrap">
                <div class="example">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="long-tr">
                            <th>ID</th>
                            <th>名称</th>
                            <th>排序</th>
                            <th>状态</th>
                            <th width="15%">添加时间</th>
                            <th width="15%">更新时间</th>
                            <th width="20%">操作</th>
                        </tr>
                        </thead>
                        <tbody id="article_list">
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
                        <tr class="long-td">
                            <td style="text-align: left">
                                <?php if(!empty($vo['child'])): ?>
                                <i class="fa fa-chevron-down" aria-hidden="true" onclick="toggle_status(this,'<?php echo $vo['id']; ?>')"></i>
                                <?php else: ?><i class="fa fa-chevron-up" aria-hidden="true"></i><?php endif; ?>
                                <?php echo $vo['id']; ?></td>
                            <td style="text-align: left">├─<?php echo $vo['name']; ?></td>
                            <td><?php echo $vo['orderby']; ?></td>
                            <td>
                                <?php if($vo['status'] == 1): ?>
                                <a href="javascript:;" onclick="cate_status(<?php echo $vo['id']; ?>);">
                                    <div id="zt<?php echo $vo['id']; ?>"><span class="label label-info">开启</span></div>
                                </a>
                                <?php else: ?>
                                <a href="javascript:;" onclick="cate_status(<?php echo $vo['id']; ?>);">
                                    <div id="zt<?php echo $vo['id']; ?>"><span class="label label-danger">禁用</span></div>
                                </a>
                                <?php endif; ?>
                            </td>
                            <td><?php echo date('Y-m-d H:i:s',$vo['create_time']); ?></td>
                            <td><?php echo date('Y-m-d H:i:s',$vo['update_time']); ?></td>
                            <td>
                                <a href="<?php echo url('edit_cate',['id'=>$vo['id']]); ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                <a href="javascript:;" onclick="del_cate(<?php echo $vo['id']; ?>)" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash-o"></i> 删除</a>
                            </td>
                        </tr>
                        <?php if(!(empty($vo['child']) || (($vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator ) && $vo['child']->isEmpty()))): if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): if( count($vo['child'])==0 ) : echo "" ;else: foreach($vo['child'] as $key=>$sub_vo): ?>
                        <tr class="long-td parent_id_<?php echo $sub_vo['parent_id']; ?>" style="display: none;">
                            <td style="text-align: left">&nbsp;&nbsp;&nbsp;
                                <?php echo $sub_vo['id']; ?></td>
                            <td style="text-align: left">&nbsp;&nbsp;&emsp;├── <?php echo $sub_vo['name']; ?></td>
                            <td><?php echo $sub_vo['orderby']; ?></td>
                            <td>
                                <?php if($sub_vo['status'] == 1): ?>
                                <a href="javascript:;" onclick="cate_status(<?php echo $sub_vo['id']; ?>);">
                                    <div id="zt<?php echo $sub_vo['id']; ?>"><span class="label label-info">开启</span></div>
                                </a>
                                <?php else: ?>
                                <a href="javascript:;" onclick="cate_status(<?php echo $vo['id']; ?>);">
                                    <div id="zt<?php echo $sub_vo['id']; ?>"><span class="label label-danger">禁用</span></div>
                                </a>
                                <?php endif; ?>
                            </td>
                            <td><?php echo $sub_vo['create_time']; ?></td>
                            <td><?php echo $sub_vo['update_time']; ?></td>
                            <td>
                                <a href="<?php echo url('edit_cate',['id'=>$sub_vo['id']]); ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                <a href="javascript:;" onclick="del_cate(<?php echo $sub_vo['id']; ?>)" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash-o"></i> 删除</a>
                            </td>
                        </tr>
                            <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
<div class="modal  fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title">添加分类</h3>
            </div>
            <form class="form-horizontal" name="add_cate" id="add_cate" method="post" action="<?php echo url('add_cate'); ?>">
                <div class="ibox-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">所属父级</label>
                        <div class="col-sm-8">
                            <select name="parent_id" class="form-control">
                                <option value="0">--默认顶级--</option>
                                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
                                <option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">分类名称</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" id="title" placeholder="输入分类名称" class="form-control"/>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">排&nbsp;序</label>
                        <div class="col-sm-8">
                            <input type="text" name="orderby" id="orderby" value="50" placeholder="输入排序" class="form-control"/>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">状&nbsp;态</label>
                        <div class="col-sm-6">
                            <div class="radio i-checks">
                                <input type="radio" name='status' value="1" checked="checked" />启用&nbsp;&nbsp;
                                <input type="radio" name='status' value="0" />禁用
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> 保存</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> 关闭</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(function(){
        $('#add_cate').ajaxForm({
            beforeSubmit: checkForm,
            success: complete,
            dataType: 'json'
        });

        function checkForm(){
            if( '' == $.trim($('#title').val())){
                layer.msg('请输入分类名称',{icon:2,time:1500,shade: 0.1}, function(index){
                    layer.close(index);
                });
                return false;
            }

        }


        function complete(data){
            if(data.code==1){
                layer.msg(data.msg, {icon: 6,time:1500,shade: 0.1}, function(index){
                    window.location.href="<?php echo url('Category/index'); ?>";
                });
            }else{
                layer.msg(data.msg, {icon: 6,time:1500,shade: 0.1});
                return false;
            }
        }

    });

    function del_cate(id){
        hhqblog.confirm(id,'<?php echo url("cate_del"); ?>')
    }
    //菜单状态
    function cate_status(id){
        hhqblog.status(id,'<?php echo url("cate_status"); ?>');
    }
</script>
</body>
</html>