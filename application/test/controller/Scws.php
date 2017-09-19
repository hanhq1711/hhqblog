<?php
namespace app\test\controller;
use think\Controller;

class Scws extends Controller
{
    public function index()
    {
		
		debug('begin');
		$sh = scws_open();
		scws_set_charset($sh, 'utf8');
		//scws_set_dict($sh, '/path/to/dict.xdb');
		//scws_set_rule($sh, '/path/to/rules.ini');
		$text = "守，就是守好家门，守好祖国边疆，守好内蒙古少数民族美好的精神家园；望，就是登高望远，规划事业、谋求发展要跳出当地、跳出自然条件限制、跳出内蒙古，有宽广的世界眼光，有大局意识；相助，就是各族干部群众要牢固树立平等团结互助和谐的思想，各族人民拧成一股绳，共同守卫祖国边疆，共同创造美好生活。”

　　118万多平方公里的辽阔北疆，是北方游牧文化的摇篮，也是今天内蒙古自治区2500多万各族同胞并肩奋斗的热土。在习近平总书记的心中，这片热土既要保持美丽的生态，也要建成幸福的家园。

　　“要坚持和发扬各民族心连心、手拉手的好传统，深入开展民族团结进步宣传教育，精心做好民族工作，把内蒙古建成祖国北疆安全稳定的屏障。”“内蒙古的生态状况如何，不仅关系内蒙古各族群众生存和发展，也关系华北、东北、西北乃至全国生态安全，要努力把内蒙古建成我国北方重要的生态安全屏障。”";
		scws_send_text($sh, $text);
		$top = scws_get_tops($sh, 5);
		dump($top);
		debug('end');
		echo debug('begin','end',6).'s';
		echo debug('begin','end','m').'kb';
    }
}
