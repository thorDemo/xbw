<?php
/**
 * Created by PhpStorm.
 * User: Nicholas
 * Date: 2018/10/23
 * Time: 下午10:27
 */
require 'database.php';

/**
 * 随机获取指定类型指定数量的文章信息
 * $num 选填默认为1
 * @param $type
 * @param $meta
 * @param $num
 * @return mixed
 */
function randMeta($type=null, $meta=['title', 'description', 'author', 'url', 'type', 'pub_time'], $num=1){
    $db = new myDatabase();
    $mysql = $db->database;
    if ($type == null){
        $data = $mysql->rand('article', $meta, ['LIMIT'=>$num]);
    }else{
        $data = $mysql->rand('article', $meta, ['type'=>$type, 'LIMIT'=>$num]);
    }
    if ($num > 1) {
        return $data;
    }
    return $data[0];
}
//print_r(randMeta('zhaopin',['title','url'],20));
/**
 * 随机获取指定数量的文章
 * $num 选填 默认为1
 * @param $type
 * @param int $num
 * @return array
 */
function randArticle($type=null, $num=1){
    $db = new myDatabase();
    $mysql = $db->database;
    if ($type == null){
        $data = $mysql->rand('article', '*', ['LIMIT'=>$num]);
    }else{
        $data = $mysql->rand('article', '*', ['type' => $type, 'LIMIT'=>$num]);
    }
    if ($num > 1) {
        return $data;
    }
    return $data[0];
}
//print_r(randArticle());
/**
 *
 * 根据页面url 获取指定文章
 * 如不存在则随机返回一篇新闻文章
 * @return mixed
 */
function getArticle()
{
	$url = $_SERVER["REQUEST_URI"];
	$db = new myDatabase();
	$mysql = $db->database;
	$article = $mysql->select('article','*',['url'=>$url]);
	if (count($article) == 0 ){
		$article = $mysql->rand('article','*',['LIMIT'=>1]);# 取一篇文章的属性保留
		$keywords = $article[0]['keywords'];
		$keyword = explode(',',$keywords)[0];
		$all = $mysql->rand('article',['content'],['keywords[~]'=>$keyword,'LIMIT'=>4]);
		$content = explode("\n",$article[0]['content']);
		$array_content = '';
		foreach ($all as $item){
			$array_content = $array_content.$item['content'];
		}
		$array_content = explode("\n",$array_content); # 文章拆分为数组添加 p 标签
		shuffle($array_content);
		$array_content = array_slice($array_content,0,count($array_content)/4);
		$array_content = array_merge($content, $array_content);
		shuffle($array_content);
		
		$fake_target = '';
		
		for($i = 0; $i < count($array_content); $i++){
			if (strpos($array_content[$i],'<p>') || $array_content[$i] == ''){
				$fake_target = $fake_target.''.$array_content[$i];
			}else{
				$fake_target = $fake_target.'<p>'.$array_content[$i].'</p>';
			}
		}
		$article[0]['content'] = $fake_target;
	}
	return $article[0];
}
//print_r(getArticle());
/**
 * 获取随机3年内时间 Y-m-d
 * @return false|string
 * @param $format
 */
function randTime($format='Y-m-d'){
    $start_time = strtotime('2015-01-01');
    $end_time = strtotime('2017-01-01');
    return date($format, mt_rand($start_time,$end_time));
}

/**
 * 获取随机栏目名
 * 可指定类型 bbs news ...
 * @param null $type
 * @param $num
 * @return mixed
 */
function typeName($type=null, $num=1){
    $db = new myDatabase();
    $mysql = $db->database;
    $data = $mysql->rand('typename',['name'],['$type'=>$type, 'LIMIT'=>$num]);
    if ($num == 1){
        return $data[0]['name'];
    }
    return $data;
}

/**
 * 获取随机人名
 * @param $num
 * @return mixed
 */
function randName($num = 1){
    $db = new myDatabase();
    $mysql = $db->database;
    $data = $mysql->rand('username','name',['LIMIT'=>$num]);
    if ($num == 1){
        return $data[0];
    }
    return $data;
}

/**
 * 获取随机评论
 * 可指定类别 bbs news...
 * @param $type
 * @param $num
 * @return mixed
 */
function randComment($type, $num = 1){
    $db = new myDatabase();
    $mysql = $db->database;
    $data = $mysql->rand('comment','content',['type'=>$type, 'LIMIT'=>$num]);
    if ($num == 1){
        return $data[0];
    }
    return $data;
}

/**
 * 生成指定个数的随机字符
 * @param $length
 * @return string
 */
function randChars($length)
{
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    for($i=0;$i<$length;$i++) {
        $key .= $pattern{mt_rand(0,35)};
    }
    return $key;
}

/**
 *
 * 随机获取一张图片
 * @param $type
 * @param $num
 * @return array
 */
function randPic($type='news', $num=1){
    $db = new myDatabase();
    $mysql = $db->database;
    $data = $mysql->rand('pic','path',['type'=>$type,'LIMIT'=>$num]);
    if ($num == 1){
        return $data[0];
    }
    return $data;
}

/**
 * 随机获取一个会员等级图片
 * @return mixed
 */
function randLevel(){
    $db = new myDatabase();
    $mysql = $db->database;
    $data = $mysql->rand('pic','path',['type'=>'level','LIMIT'=>1]);
    return $data[0];
}

/**
 * 返回随机列表url
 * @param $type
 * @return string
 */
function randList($type = null){
    $listType = ['bbs','fangchan','news','blog','ershou','jiaoyou','keji','qiye','zhaopin','lvyou','shenghuo'];
    if ($type == null){
        return '/'.$listType[mt_rand(0,count($listType)-1)].'_'.mt_rand(10000, 99999).'/';
    }
    return '/'.$type.'_'.mt_rand(10000, 99999).'/';
}

function domain(){
	$domain = $_SERVER['SERVER_NAME'];
	echo 'http://'.$domain;
}

/**
 * 随机获取地名
 * @param int $num
 * @return array|bool
 */
function randPlace($num = 1){
    $db = new myDatabase();
    $mysql = $db->database;
    $data = $mysql->rand('place','name',['LIMIT'=>$num]);
    if ($num == 1){
        return $data[0];
    }
    return $data;
}

/**
 * 获取某种类型
 * @param $type
 * @return array|bool
 */
function lastArticle($type){
    $db = new myDatabase();
    $mysql = $db->database;
    $data = $mysql->select('article',['url','title'],['ORDER'=>['id'=>'DESC'],'LIMIT'=>100,'type'=>$type]);
    return $data;
}

/**
 *
 * @param string $type
 * @return string
 */
function randType($type='show'){
    if ($type == 'show'){
        $chars1 = randChars(5);
        $chars2 = randChars(5);
        $times = randTime('Ymd');
        return 'http://www.61k.com/clu'.$chars1.'/'.$times.$chars2.'.html';
    }
    else{
        $chars1 = randChars(5);
        return 'http://www.61k.com/clu'.$chars1.'/';
    }
}

