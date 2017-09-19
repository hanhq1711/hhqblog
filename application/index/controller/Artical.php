<?php
/**
 * User: hanhq
 * Date: 2017/4/26
 * Time: 21:03
 */

namespace app\index\controller;


use think\Db;

class Artical extends Base
{
	public function detail()
	{
		$id = input('id/d');
		$page = input('page',1);
		$article = Db::name('article')->alias('a')->join('__ARTICLE_CATE__ ca','a.cate_id = ca.id','LEFT')->where(['a.id'=>$id])->field('a.*,ca.name')->find();
		//详情内分页
		$content_data = explode('_ueditor_page_break_tag_',$article['content']);
		$total = count($content_data);
		$article['content'] = $content_data[$page-1];
		/*$news['page']='';
		if($total>1){
			$prevbtn=($page<=1)?'<li class="disabled"><span>&laquo;</span></li>':'<li><a href="' . url('index/Artical/detail',['id'=>input('id'),'page'=>($page-1)]) . '">&laquo;</a></li>';
			$nextbtn=($page>=$total)?'<li class="disabled"><span>&raquo;</span></li>':'<li><a href="' . url('index/Artical/detail',['id'=>input('id'),'page'=>($page+1)]) . '">&raquo;</a></li>';
			$link=$this->getLinks($page,$total,input('id'));
			$article['page']=sprintf(
				'<ul class="pagination">%s %s %s</ul>',
				$prevbtn,
				$link,
				$nextbtn
			);
		}*/
		//if (input('page') && request()->isAjax()) return json($article);
		$this->assign('article',$article);
		$this->assign('allpage',$total);
		return $this->fetch();
	}
	public function lists()
	{
		return $this->fetch();
	}
	//分页中间部分链接
	protected function getLinks($page,$total,$id)
	{
		$block = [
			'first'  => null,
			'slider' => null,
			'last'   => null
		];
		
		$side   = 3;
		$window = $side * 2;
		
		if ($total < $window + 6) {
			$block['first'] = $this->getUrlRange(1, $total,$id);
		} elseif ($page <= $window) {
			$block['first'] = $this->getUrlRange(1, $window + 2,$id);
			$block['last']  = $this->getUrlRange($total - 1, $total,$id);
		} elseif ($page > ($total - $window)) {
			$block['first'] = $this->getUrlRange(1, 2,$id);
			$block['last']  = $this->getUrlRange($total - ($window + 2), $total,$id);
		} else {
			$block['first']  = $this->getUrlRange(1, 2,$id);
			$block['slider'] = $this->getUrlRange($page - $side, $page + $side,$id);
			$block['last']   = $this->getUrlRange($total - 1, $total,$id);
		}
		$html = '';
		if (is_array($block['first'])) {
			$html .= $this->getUrlLinks($block['first'],$page);
		}
		if (is_array($block['slider'])) {
			$html .= '<li class="disabled"><span>...</span></li>';
			$html .= $this->getUrlLinks($block['slider'],$page);
		}
		if (is_array($block['last'])) {
			$html .= '<li class="disabled"><span>...</span></li>';
			$html .= $this->getUrlLinks($block['last'],$page);
		}
		return $html;
	}
	protected function getUrlLinks(array $urls,$page)
	{
		$html = '';
		foreach ($urls as $text => $url) {
			$html .=($text == $page)?'<li class="active"><span>' . $text . '</span></li>':'<li><a href="' . htmlentities($url) . '">' . $text . '</a></li>';
		}
		return $html;
	}
	protected function getUrlRange($start, $end,$id)
	{
		$urls = [];
		for ($page = $start; $page <= $end; $page++) {
			$urls[$page] = url('index/Artical/detail',['id'=>$id,'page'=>$page]);
		}
		return $urls;
	}
}