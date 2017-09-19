<?php
/**
 * User: hanhq
 * Date: 2017/3/30
 * Time: 12:19
 */

namespace app\admin\controller;


use comment\Qiniu;
use think\Db;
use think\Request;

class Article extends Base
{
	public function index()
	{
		$map = [];
		$keyword = input('keyword','');
		if (!empty($keyword)) $map['a.title']=['like','%'.$keyword.'%'];
		$limit = 10;
		$current = input('page',1);
		//总记录数
		$count = model('Article')->where($map)->count();
		
		//总页数
		$allpage = (int)ceil($count/$limit);
		$info = model('Article')->where($map)->alias('a')->join('__ARTICLE_CATE__ ac','a.cate_id=ac.id','LEFT')->page($current,$limit)->order('a.id desc')->field('a.*,ac.name')->select();
		$this->assign([
			'allpage'=>$allpage,
			'current'=>$current,
			'keyword'=>$keyword,
			'count'=>$count,
		]);
		if (input('page')) return json($info);
		return $this->fetch();
	}
	
	public function add_article()
	{
		if (Request::instance()->isAjax()){
			//文件上传
			$file = Request::instance()->file('photo');
			if (!empty($file)) {
				if (config('webinfo.qiniu_open')) {
					$qiniu = Qiniu::instance();
					$info  = $qiniu->upload();
					if ($info){
						$photo =  $info[0]['key'];
					}else{
						return json(['code'=>-1,'msg'=>$qiniu->getError()]);
					}
					
				} else {
					$info_obj = $file->move(ROOT_PATH . 'public/uploads/images');
					if ($info_obj) {
						$photo ='uploads/images/'.date('Ymd') .'/'. $info_obj->getFilename();
					} else {
						// 上传失败获取错误信息
						return json(['code'=>-1,'msg'=>$file->getError()]);
					}
				}
			}
			$data = input('');
			$article = model('Article');
			$data = array_merge($data,['photo'=>$photo]);
			$article->data($data);
			$res = $article->allowField(true)->save();
			if ($res){
				return ['code'=>1,'msg'=>'添加成功'];
			}else{
				return ['code'=>-2,'msg'=>'添加失败'];
			}
		}
		//查询分类
		$cates = Db::name('article_cate')->field('id,name')->select();
		$this->assign('cates',$cates);
		return $this->fetch();
	}
	
	public function edit_article()
	{
		if (Request::instance()->isAjax()){
			$id = input('id');
			$file = Request::instance()->file('file');
			$article = model('article');
			$info= $article::get($id);
			if (!empty($file)){
				if (strpos($info->photo,'uploads/') === false){
					//删除七牛上的
					Qiniu::instance()->qiniuDel($info->photo);
				}else{
					@unlink('./'.$info->photo);
					//检查是否为空目录
					if (isEmptyDir(dirname('./'.$info->photo))){
						delFile(dirname('./'.$info->photo));
					}
				}
				if (config('webinfo.qiniu_open')) {
					$qiniu = Qiniu::instance();
					$info  = $qiniu->upload();
					if ($info){
						$photo =  $info[0]['key'];
					}else{
						return json(['code'=>-1,'msg'=>$qiniu->getError()]);
					}
					
				} else {
					$info_obj = $file->move(ROOT_PATH . 'public/uploads/images');
					if ($info_obj) {
						$photo ='uploads/images/'.date('Ymd') .'/'. $info_obj->getFilename();
					} else {
						// 上传失败获取错误信息
						return json(['code'=>-1,'msg'=>$file->getError()]);
					}
				}
			}
			$data = input('');
			if (!empty($photo)){
				$data = array_merge($data,['photo'=>$photo]);
			}
			$res = $article->allowField(true)->save($data,['id'=>$id]);
			if ($res){
				return ['code'=>1,'msg'=>'修改成功'];
			}else{
				return ['code'=>-2,'msg'=>'修改失败'];
			}
		}
		$article = Db::name('article')->where(['id'=>input('id')])->find();
		//查询分类
		$cates = Db::name('article_cate')->field('id,name')->select();
		$this->assign([
			'article'=>$article,
			'cates'=>$cates,
		]);
		return $this->fetch();
	}
	/**
	 * 删除文章
	 */
	public function del_article()
	{
		$id = input('id');
		$res = Db::name('article')->where(['id'=>$id])->delete();
		if ($res !== false){
			return ['code'=>1,'msg'=>'删除成功'];
		}else{
			return ['code'=>-2,'msg'=>'网络错误'];
		}
	}
	/**
	 * 文章启用禁用
	 */
	public function article_state()
	{
		$id=input('param.id');
		$status = Db::name('article')->where(array('id'=>$id))->value('status');//判断当前状态情况
		if($status==1)
		{
			$flag = Db::name('article')->where(array('id'=>$id))->setField(['status'=>0]);
			return json(['code' => 1, 'data' => $flag['data'], 'msg' => '已禁止']);
		}
		else
		{
			$flag = Db::name('article')->where(array('id'=>$id))->setField(['status'=>1]);
			return json(['code' => 0, 'data' => $flag['data'], 'msg' => '已开启']);
		}
	}
	/**
	 * 文章推荐
	 */
	public function article_tui()
	{
		$id=input('param.id');
		$status = Db::name('article')->where(array('id'=>$id))->value('is_tui');//判断当前状态情况
		if($status==1)
		{
			$flag = Db::name('article')->where(array('id'=>$id))->setField(['is_tui'=>0]);
			return json(['code' => 1, 'data' => $flag['data'], 'msg' => '已禁止']);
		}
		else
		{
			$flag = Db::name('article')->where(array('id'=>$id))->setField(['is_tui'=>1]);
			return json(['code' => 0, 'data' => $flag['data'], 'msg' => '已开启']);
		}
	}
}