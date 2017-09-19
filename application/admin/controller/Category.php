<?php
/**
 * User: hanhq
 * Date: 2017/4/6
 * Time: 16:08
 */

namespace app\admin\controller;


use app\admin\model\ArticleCate;
use think\Db;
use think\Request;

class Category extends Base
{
	public function index()
	{
		$cateModel = model('ArticleCate');
		$catsInfo =$cateModel->order('orderby asc,id desc')->column('*','id');
		foreach ($catsInfo as $k=>$v){
			if ($v['parent_id'] != 0){
				$catsInfo[$v['parent_id']]['child'][] = $v;
				unset($catsInfo[$k]);
			}
		}
		$this->assign('list',$catsInfo);
		return $this->fetch();
	}
	
	/**
	 * 新增
	 * @return array
	 */
	public function add_cate()
	{
		$cate_model = model('ArticleCate');
		$data = input('');
		$cate_model->data($data);
		$res = $cate_model->allowField(true)->save();
		if ($res){
			return ['code'=>1,'msg'=>'添加成功'];
		}else{
			return ['code'=>-1,'msg'=>'网络错误，请稍后重试'];
		}
	}
	
	/**
	 * 编辑分类
	 * @return array|mixed
	 */
	public function edit_cate()
	{
		$cate_model = model('Article_cate');
		$id = input('id/d');
		if (Request::instance()->isAjax()){
			$data = input('');
			$res = $cate_model->allowField(true)->isUpdate(true)->save($data);
			if ($res){
				return ['code'=>1,'msg'=>'修改成功'];
			}else{
				return ['code'=>-1,'msg'=>'网络错误，请稍后重试'];
			}
		}
		$cates = $cate_model::all(['parent_id'=>0]);
		$cate_info = $cate_model::get($id);
		$this->assign([
			'list'=>$cates,
			'info'=>$cate_info,
		]);
		return $this->fetch();
	}
	public function cate_del()
	{
		$id = input('id/d');
		$res = ArticleCate::destroy($id);
		if ($res){
			return ['code'=>1,'msg'=>'删除成功'];
		}else{
			return ['code'=>0,'msg'=>'网络错误，请稍后重试'];
		}
	}
	/**
	 * 启用禁用
	 * @return array
	 */
	public function cate_status()
	{
		$cate_model = model('ArticleCate');
		$id = input('id/d');
		$info = $cate_model::get($id);
		if ($info->status ==1){
			$res = $cate_model->save(['status'=>0],['id'=>$id]);
			return ['code'=>1,'msg'=>'已禁用'];
		}else{
			$res = $cate_model->save(['status'=>1],['id'=>$id]);
			return ['code'=>0,'msg'=>'已开启'];
		}
	}
}