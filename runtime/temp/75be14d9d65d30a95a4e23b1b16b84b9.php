<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"/yjdata/www/hhqblog/public/../application/admin/view/article/edit_article.html";i:1493465477;s:71:"/yjdata/www/hhqblog/public/../application/admin/view/public/header.html";i:1493465479;s:71:"/yjdata/www/hhqblog/public/../application/admin/view/public/footer.html";i:1493465479;}*/ ?>
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
<style>
    .file1 {
        position: relative;
        display: inline-block;
        background: #23c0f1;
        border: 1px solid #99d3f5;
        border-radius: 4px;
        padding: 4px 9pt;
        overflow: hidden;
        color: #ffffff;
        text-decoration: none;
        text-indent: 0;
        line-height: 25px;
        float: left;
    }
    .file1:hover{
        color: #ffffff;
    }
    .file1 input{
        position: absolute;
        font-size: 75pt;
        right: 10px;
        top: 0;
        opacity: 0;
        display: block;
    }
</style>
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/webuploader.css">
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/style.css">
<style>
.file-item{float: left; position: relative; width: 110px;height: 110px; margin: 0 20px 20px 0; padding: 4px;}
.file-item .info{overflow: hidden;}
.uploader-list{width: 100%; overflow: hidden;}
</style>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>编辑文章</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal m-t" name="edit" id="edit" method="post" action="<?php echo url('edit_article'); ?>">
                    <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">标题：</label>
                            <div class="input-group col-sm-4">
                                <input id="title" type="text" class="form-control" name="title" value="<?php echo $article['title']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">所属分类：</label>
                            <div class="input-group col-sm-4">
                                <select class="form-control m-b chosen-select" name="cate_id" id="cate_id">
                                    <option value="">==请选择==</option>
                                    <?php if(!empty($cates)): if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$vo): ?>
                                            <option value="<?php echo $vo['id']; ?>" <?php if($article['cate_id'] == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">文章类型：</label>
                            <div class="input-group col-sm-4">
                                <div class="radio i-checks">
                                    <input type="radio" name='type' value="0" <?php if($article['type'] == 0): ?>checked<?php endif; ?> />正文&nbsp;&nbsp;
                                    <input type="radio" name='type' value="1" <?php if($article['type'] == 1): ?>checked<?php endif; ?>/>头条&nbsp;
                                    <input type="radio" name='type' value="2" <?php if($article['type'] == 2): ?>checked<?php endif; ?>/>轮播
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">关键字：</label>
                            <div class="input-group col-sm-4">
                                <input id="keyword" type="text" class="form-control" name="keyword" value="<?php echo $article['keyword']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">描述：</label>
                            <div class="input-group col-sm-4">
                                <textarea type="text" rows="5" name="remark" id="remark" placeholder="输入文章描述" class="form-control"><?php echo $article['remark']; ?></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">封面：</label>
                            <div class="input-group col-sm-4">
                                <a href="javascript:void (0);" class="file1">
                                    <input type="file" name="file" id="imgPicker">
                                    选择上传文件
                                </a>
                                <img id="img_data" height="100px" style="float:left;margin: 0 10px;" src="<?php echo config('webinfo.host_domain'); ?><?php echo config('webinfo.qiniu_url'); ?><?php echo $article['photo']; ?>"/>
                                <button class="btn btn-primary" type="button" style="background:#23c0f1; height: 38px;border-color:#23c0f1;" onclick="backpic('<?php echo config('webinfo.weburl'); ?><?php echo $article['photo']; ?>')"><i class="fa fa-reply"></i> 撤销上传</button>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>                          
                        <div class="form-group">
                            <label class="col-sm-3 control-label " for="myEditor">内容：</label>
                            <div class="input-group col-sm-9">
                                <script src="/static/admin/ueditor/ueditor.config.js" type="text/javascript"></script>
                                <script src="/static/admin/ueditor/ueditor.all.js" type="text/javascript"></script>
                                <textarea name="content" style="width:90%" id="myEditor"><?php echo $article['content']; ?></textarea>
                                <script type="text/javascript">
                                    var editor = new UE.ui.Editor();
                                    editor.render("myEditor");
                                </script>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">是否推荐：</label>
                            <div class="input-group col-sm-4">
                                <div class="radio i-checks">
                                    <?php if($article['is_tui'] == 1): ?>
                                        <input type="radio" name='is_tui' value="1" checked="checked" />是&nbsp;&nbsp;
                                        <input type="radio" name='is_tui' value="0" />否
                                    <?php else: ?>
                                        <input type="radio" name='is_tui' value="1" />是&nbsp;&nbsp;
                                        <input type="radio" name='is_tui' value="0" checked="checked" />否
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">状&nbsp;&nbsp;态：</label>
                            <div class="col-sm-6">
                                <div class="radio i-checks">
                                    <?php if($article['status'] == 1): ?>
                                    <input type="radio" name='status' value="1" checked="checked" />启用&nbsp;&nbsp;
                                    <input type="radio" name='status' value="0" />禁用
                                    <?php else: ?>
                                    <input type="radio" name='status' value="1" />启用&nbsp;&nbsp;
                                    <input type="radio" name='status' value="0" checked="checked" />禁用
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">访问量：</label>
                            <div class="input-group col-sm-4">
                                <input type="text" name="views" id="views" value="<?php echo $article['views']; ?>" class="form-control" value="<?php echo $article['views']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">点赞数量：</label>
                            <div class="input-group col-sm-4">
                                <input type="text" name="like" id="like" value="<?php echo $article['like']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">作者：</label>
                            <div class="input-group col-sm-4">
                                <input type="text" name="auth" id="writer" class="form-control" value="<?php echo $article['auth']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger" href="javascript:history.go(-1);"><i class="fa fa-close"></i> 返回</a>
                            </div>
                        </div>
                    </form>
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
<script type="text/javascript">

    $(function(){
        $('#edit').ajaxForm({
            beforeSubmit: checkForm, // 此方法主要是提交前执行的方法，根据需要设置
            success: complete, // 这是提交后的方法
            dataType: 'json'
        });

        function checkForm(){
            if( '' == $.trim($('#title').val())){
                layer.msg('标题不能为空', {icon: 5,time:1500,shade: 0.1}, function(index){
                    layer.close(index);
                });
                return false;
            }
            if(!editor.hasContents()){
                layer.msg('内容不能为空', {icon: 5,time:1500,shade: 0.1}, function(index){
                    layer.close(index);
                });
                return false;
            }

     }

        function complete(data){
            if(data.code == 1){
                layer.msg(data.msg, {icon: 6,time:1500,shade: 0.1}, function(index){
                    layer.close(index);
                    window.location.href="<?php echo url('article/index'); ?>";
                });
            }else{
                layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1}, function(index){
                    layer.close(index);
                });
                return false;
            }
        }

    });


    //IOS开关样式配置
   var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, {
            color: '#1AB394'
        });
    var config = {
        '.chosen-select': {},                    
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }



</script>
</body>
</html>
