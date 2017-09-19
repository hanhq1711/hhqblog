//一些新增的js代码：滚动公告等

$('.infobg-close').click(function(){$(this).parent('.contextual').fadeOut('slow');});function startmarquee(lh,speed,delay,index){var t,p=false,o=document.getElementById("news-scroll-zone"+index);o.innerHTML+=o.innerHTML;o.onmouseover=function(){p=true};o.onmouseout=function(){p=false};o.scrollTop=0;function start(){t=setInterval(scrolling,speed);if(!p){o.scrollTop+=1;}};function scrolling(){if(o.scrollTop%lh!=0){o.scrollTop+=1;if(o.scrollTop>=o.scrollHeight/2)o.scrollTop = 0;}else{clearInterval(t);setTimeout(start,delay);}};setTimeout(start,delay);};if($('#news-scroll-zone').length>0){startmarquee(20,30,5000,'');};
	
	// 分享
$('#share-main-s').click(function () {
	$('#share').animate({
		opacity: 'toggle'
	}, 300);
	return false;
});

// 赏
$('#shang-main-p').click(function () {
	$('#shang').animate({
		opacity: 'toggle'
	}, 300);
	return false;
});

//底部二维码弹出
function showimg(){
document.getElementById("wximg").style.display='block';
}
function hideimg(){
document.getElementById("wximg").style.display='none';
}

//加载提示
$(document).ready(function() {
  $('h2 a,h3 a').click(function() {
    myloadoriginal = this.text;
    $(this).text('请稍等！主页君正在玩命加载中 …');
    var myload = this;
    setTimeout(function() {
      $(myload).text(myloadoriginal);
    }, 2011);
  });
});

//相关文章图片自适应比例
$(function(){
    var ratio = 0.75;
    var liWidth = $('.related_img li img').width();
    var liHeight = liWidth * ratio;
    $('.related_img li img').width( liWidth );
    $('.related_img li img').height( liHeight );
    
});

//插入表情
$('.add-smiley').click(function () {
    $('.comment-smiley').animate({
        opacity: 'toggle',
        left: '50px'
    }, 1000).animate({
        left: '10px'
    }, 'fast');
    return false;
});

// 评论贴图
function embedImage() {
  var URL = prompt('请输入图片 URL 地址:', 'http://');
  if (URL) {
    document.getElementById('comment').value = document.getElementById('comment').value +URL;
  }
};