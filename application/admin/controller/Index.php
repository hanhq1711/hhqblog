<?php
/**
 * User: hanhq
 * Date: 2017/3/29
 * Time: 15:11
 */

namespace app\admin\controller;


class Index extends Base
{
	public function index()
	{
		return $this->fetch('public/index');
	}
	public function main()
	{
		$info = [
		    'think_v'=>THINK_VERSION,
		    'web_server'=>$_SERVER['SERVER_SOFTWARE'],
		    'onload'=>ini_get('upload_max_filesize'),
		    'phpversion'=>PHP_VERSION,
		];
		$this->assign('info',$info);
		return $this->fetch('index');
	}
}