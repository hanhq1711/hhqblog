<?php
/**
 * User: hanhq
 * Date: 2017/4/14
 * Time: 11:19
 */

namespace app\admin\controller;
use think\Controller;

class Sys extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
	
	/**
	 * 清楚缓存
	 */
	public function clear()
	{
		if (delete_dir_file(CACHE_PATH) || delete_dir_file(TEMP_PATH)){
			return json(['code' => 1, 'msg' => '清除缓存成功']);
		} else {
			return json(['code' => 0, 'msg' => '清除缓存失败']);
		}
	}
}