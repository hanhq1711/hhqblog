/**
 * Created by Administrator on 2017/4/1.
 */
var hhqblog = {

    //成功弹出层
    success: function(message,url){
        layer.msg(message, {icon: 6,time:2000}, function(index){
            layer.close(index);
            window.location.href=url;
        });
    },

    // 错误弹出层
    error: function(message) {
        layer.msg(message, {icon: 5,time:2000}, function(index){
            layer.close(index);
        });
    },

    // 确认弹出层
    confirm : function(id,url,callback) {
        layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
            $.getJSON(url, {'id' : id}, function(res){
                if(res.code == 1){
                    layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                    callback = callback || '';
                    if(callback !=''){
                        console.log(typeof (callback));
                        callback()
                    }else{window.location.reload();}

                }else{
                    layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                }
            });
            layer.close(index);
        })
    },

    //状态
    status : function(id,url){
            $.post(url,{id:id},function(data){
                    if(data.code==1){
                        var a='<span class="label label-danger">禁用</span>'
                        $('#zt'+id).html(a);
                        layer.msg(data.msg,{icon:2,time:1500,shade: 0.1,});
                        return false;
                    }else{
                        var b='<span class="label label-info">开启</span>'
                        $('#zt'+id).html(b);
                        layer.msg(data.msg,{icon:1,time:1500,shade: 0.1,});
                        return false;
                    }

            });
            return false;
    },
    //状态
    tuijian : function(id,url){
        $.post(url,{id:id},function(data){
            if(data.code==1){
                var a='<span class="label label-danger">否</span>'
                $('#tj'+id).html(a);
                layer.msg(data.msg,{icon:2,time:1500,shade: 0.1,});
                return false;
            }else{
                var b='<span class="label label-info">是</span>'
                $('#tj'+id).html(b);
                layer.msg(data.msg,{icon:1,time:1500,shade: 0.1,});
                return false;
            }

        });
        return false;
    }

};
/*表格的展开折叠*/
function toggle_status(e,parent_id) {
    if ($(e).hasClass('fa fa-chevron-down')){
        $(e).attr('class','fa fa-chevron-up');
    }else{
        $(e).attr('class','fa fa-chevron-down');
    }
    $('tr').siblings('.parent_id_'+parent_id).toggle();
}
/*图片上传相关*/
$('#imgPicker').change(function(){
    var objUrl = getObjUrl(this.files[0]);
    if (objUrl){
        $('#img_data').attr('src',objUrl)
    }
});
function getObjUrl(file){
    var url = null;
    if (window.createObjectURL != undefined) { // basic
        url = window.createObjectURL(file);
    } else if (window.URL != undefined) { // mozilla(firefox)
        url = window.URL.createObjectURL(file);
    } else if (window.webkitURL != undefined) { // webkit or chrome
        url = window.webkitURL.createObjectURL(file);
    }
    return url;
}
//撤销图片上传
function backpic(picurl){
    console.log(picurl);
    $('#img_data').attr('src',picurl);

    $('#imgPicker').val('');
}