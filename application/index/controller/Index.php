<?php
namespace app\index\controller;

use think\Db;

class Index extends Base
{
    public function index()
    {
		
		$article_model = model('Article');
    	//读取头条
		$top_line = cache('top_line');
		if (empty($top_line)){
			$top_line = $article_model->where(['type'=>1])->limit(6)->order('id desc')->select();
			cache('top_line',$top_line,3600);
		}
		//读取幻灯
		$carousel = cache('carousel');
		if (empty($carousel)){
			$carousel = $article_model->where(['type'=>2])->limit(6)->order('id desc')->select();
			//cache('carousel',$carousel,3600);
		}
		//读取文章列表
		$page = input('page',1);
		$map = ['a.status'=>1];
		$count = model('Article')->count();
		$pageSize = 15;
		$allpage = (int)ceil($count/$pageSize);
		$list = model('Article')->useGlobalScope(false)->alias('a')->where($map)->order('id desc')->join('__ARTICLE_CATE__ ac','a.cate_id=ac.id','left')->page($page,$pageSize)->field('a.*,ac.name')->select();
		
		$this->assign('list',$list);
		$this->assign('allpage',$allpage);
		
		$this->assign([
			'top_line'=>$top_line,
			'carousel'=>$carousel,
		]);
		if (input('page')) return json($list);
    	return $this->fetch();
    }
    /**
	 * ajax获取文章列表
	 */
    public function ajax_index()
	{
		$map = ['status'=>1];
		if(!empty(input('c'))) $map['cat_id'] = input('c');
		$count = model('Article')->where($map)->count();
		$pageSize = 10;
		$allpage = (int)ceil($count/$pageSize);
		$list = model('Article')->useGlobalScope(false)->alias('a')->where($map)->order('id desc')->join('__ARTICLE_CATE__ ac','a.cate_id=ac.id')->field('a.*,ac.name')->select();
		$this->assign('list',$list);
		$this->assign('allpage',$allpage);
		return json($list);
	}
}
