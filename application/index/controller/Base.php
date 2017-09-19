<?php
/**
 * User: hanhq
 * Date: 2017/4/7
 * Time: 14:59
 */

namespace app\index\controller;


use think\Controller;
use think\Db;

class Base extends Controller
{
	public function _initialize()
	{
		//读取网站配置
		//读取网站导航
		$menu_data = cache('menu_data');
		if (empty($menu_data)){
			$menu_data = Db::name('article_cate')->order('orderby asc,id asc')->column('id,name,parent_id','id');
			foreach ($menu_data as $k=>$v){
				if ($v['parent_id'] !=0){
					$menu_data[$v['parent_id']]['child'][]=$v;
					unset($menu_data[$k]);
				}
			}
			cache('menu_data',$menu_data);
		}
		//读取推荐
		$article_model = model('Article');
		$recommend = cache('recommend');
		if (empty($recommend)){
			$recommend = $article_model->where(['is_tui'=>1])->limit(8)->order('id desc')->select();
			cache('recommend',$recommend,3600);
		}
		//最新发布
		$new_article = cache('new_article');
		if (empty($new_article)){
			$new_article = $article_model->order('id desc')->limit(8)->select();
			cache('new_article',$new_article,3600);
		}
		//热门
		$hot = Db::name('article')->order('views desc')->limit(8)->select();
		$this->assign('menu',$menu_data);//菜单
		$this->assign('recommend',$recommend);//推荐
		$this->assign('newarticle',$new_article);//最新
		$this->assign('hot',$hot);//热门
	}
	
}