<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
// 递归删除文件夹
function delFile($dir,$file_type='') {
	if(is_dir($dir)){
		$files = scandir($dir);
		//打开目录 //列出目录中的所有文件并去掉 . 和 ..
		foreach($files as $filename){
			if($filename!='.' && $filename!='..'){
				if(!is_dir($dir.'/'.$filename)){
					if(empty($file_type)){
						unlink($dir.'/'.$filename);
					}else{
						if(is_array($file_type)){
							//正则匹配指定文件
							if(preg_match($file_type[0],$filename)){
								unlink($dir.'/'.$filename);
							}
						}else{
							//指定包含某些字符串的文件
							if(false!=stristr($filename,$file_type)){
								unlink($dir.'/'.$filename);
							}
						}
					}
				}else{
					delFile($dir.'/'.$filename);
				}
			}
		}
		rmdir($dir);
	}else{
		if(file_exists($dir)) unlink($dir);
	}
}
/**
 * 循环删除目录和文件
 * @param string $dir_name
 * @return bool
 */
function delete_dir_file($dir_name) {
	$result = false;
	if(is_dir($dir_name)){
		if ($handle = opendir($dir_name)) {
			while (false !== ($item = readdir($handle))) {
				if ($item != '.' && $item != '..') {
					if (is_dir($dir_name . DS . $item)) {
						delete_dir_file($dir_name . DS . $item);
					} else {
						unlink($dir_name . DS . $item);
					}
				}
			}
			closedir($handle);
			if (rmdir($dir_name)) {
				$result = true;
			}
		}
	}
	
	return $result;
}
	/**
	 * 检查某个目录是否为空目录
	 * @param $dir
	 */
	function isEmptyDir($dir)
	{
		$result = true;
		if(is_dir($dir)){
			$files = scandir($dir);
			foreach ($files as $filename){
				if ($filename !='.' && $filename !='..'){
					$result = false;
					break;
				}
			}
		}else{
			$result = false;
		}
		return $result;
	}

