<?php
/**
 * User: hanhq
 * Date: 2017/4/5
 * Time: 10:17
 */

namespace app\admin\model;


use think\Model;
use think\Request;

class Article extends Model
{
	//自动写入时间戳
	protected $autoWriteTimestamp = true;
	//自动完成
	protected $auto = ['ip'];
	//自动写入ip
	public function setIpAttr()
	{
		return Request::instance()->ip();
	}
}