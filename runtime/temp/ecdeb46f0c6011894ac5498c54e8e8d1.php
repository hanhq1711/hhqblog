<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"/yjdata/www/hhqblog/public/../application/admin/view/sys/index.html";i:1493465479;s:71:"/yjdata/www/hhqblog/public/../application/admin/view/public/header.html";i:1493465479;s:71:"/yjdata/www/hhqblog/public/../application/admin/view/public/footer.html";i:1493465479;}*/ ?>
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
<style type="text/css">
/* TAB */
.nav-tabs.nav>li>a {
    padding: 10px 25px;
    margin-right: 0;
}
.nav-tabs.nav>li>a:hover,
.nav-tabs.nav>li.active>a {
    border-top: 3px solid #1ab394;
    padding-top: 8px;
}
.nav-tabs>li>a {
    color: #A7B1C2;
    font-weight: 500;  
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    border-radius: 0;
}
</style>

<body class="gray-bg">
<div class="wrapper wrapper-content animated">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>网站配置</h5>
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
                    <div class="panel-body">                      
                        <div class="builder-tabs builder-form-tabs">
                            <ul class="nav nav-tabs">
                                    <li class="active"><a href="">站点配置</a></li>
                            </ul>
                        </div>
                        <div class="form-group"></div>
                    
                    <div class="builder-container">
                        <div class="row">
                            <div class="col-xs-12">
                                <form action="<?php echo url('save'); ?>" method="post" class="form-horizontal">  
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">站点名称</label>
                                            <div class="input-group col-sm-4">
                                                    <input type="text" class="form-control" name="" value="">
                                                    <!--<span class="help-block m-b-none"><i class="fa fa-info-circle"></i> </span>-->
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                        </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">站点网址</label>
                                        <div class="input-group col-sm-4">
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">站点关键字</label>
                                        <div class="input-group col-sm-4">
                                            <textarea class="form-control" name="" ></textarea>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">站点描述</label>
                                        <div class="input-group col-sm-4">
                                            <textarea class="form-control" name="" ></textarea>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">联系方式</label>
                                        <div class="input-group col-sm-4">
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">联系QQ</label>
                                        <div class="input-group col-sm-4">
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">站长邮箱</label>
                                        <div class="input-group col-sm-4">
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">地址信息</label>
                                        <div class="input-group col-sm-4">
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">备案信息</label>
                                        <div class="input-group col-sm-4">
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">版权信息</label>
                                        <div class="input-group col-sm-4">
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存信息</button>&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-danger" href="javascript:history.go(-1);"><i class="fa fa-close"></i> 返回</a>
                                        </div>
                                    </div>                               
                                </form>
                            </div>
                        </div>
                    </div>              
                </div>
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

<script type="text/javascript">

    var config = {
        '.chosen-select': {},                    
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
</script>
</body>
</html>
