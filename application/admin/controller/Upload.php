<?php
/**
 * User: hanhq
 * Date: 2017/3/31
 * Time: 16:45
 */

namespace app\admin\controller;


use comment\Qiniu;
use think\File;
use think\Request;

class Upload
{
	public function upload()
	{
	    $file = Request::instance()->file('file');
	    $info=[];
	    if (config('webinfo.qiniu_open')){
			$qiniu = new Qiniu();
			$info = $qiniu::instance()->upload();
			$info[0]['key_url'] = config('webinfo.weburl').$info[0]['key'];
		}else{
			$info_obj = $file->move(ROOT_PATH . 'public/uploads/images');
			if($info_obj){
				// 成功上传后 获取上传信息
				// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
				$info[0]['key_url'] = config('webinfo.weburl').'uploads/images/'.$info_obj->getSaveName();
				
			}else{
				// 上传失败获取错误信息
				echo $file->getError();
			}
		}
	   
	    return json($info);
	}
	public function delImage()
	{
		$key = Request::instance()->param('key');
		if (!empty($key)){
			$info = Qiniu::instance()->qiniuDel($key);
			if ($info){
				$data= ['status'=>1,'msg'=>'删除成功'];
			}else{
				$data= ['status'=>0,'msg'=>'网络错误'];
			}
		}else{
		
		}
		return $data;
	}
}