<?php
/**
 * User: hanhq
 * Date: 2017/4/12
 * Time: 14:19
 */

namespace app\index\model;


use think\Model;

class Article extends Model
{
	//定义全局范围的查找
	protected function base($query)
	{
		return $query->where('status',1);
	}
}