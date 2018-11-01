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
 * @param $table
 * @param $type
 * @param $num
 * @return mixed
 */
function randMeta($table, $type, $num=1){
    $db = new myDatabase();
    $mysql = $db->database;
    $article = $mysql->query(
        "SELECT $type FROM $table
				WHERE id >= (SELECT FLOOR( RAND()*((SELECT MAX(id) FROM $table)-(SELECT MIN(id) FROM $table))+(SELECT MIN(id) FROM $table)))
				ORDER BY id LIMIT :num;",[':num'=>$num]
	)->fetchAll();
    if($num == 1){
        return $article[0][$type];
    }
	return $article;
}



//print_r(randMeta('bbs_article','title', 10));

/**
 * 随机获取指定数量的文章
 * $num 选填 默认为1
 * @param $table
 * @param int $num
 * @return array
 */
function randArticle($table,$num=1){
	$db = new myDatabase();
	$mysql = $db->database;
	$article = $mysql->query(
		"SELECT * FROM $table
				WHERE id >= (SELECT FLOOR( RAND()*((SELECT MAX(id) FROM $table)-(SELECT MIN(id) FROM $table))+(SELECT MIN(id) FROM $table)))
				ORDER BY id LIMIT :num;",[':num'=>$num]
	)->fetchAll();
	if($num==1){
	    return $article[0];
    }
	return $article;
}


/**
 *
 * 根据页面url 获取指定文章
 * 如不存在则随机返回一篇新闻文章
 * @param $table
 * @param $url
 * @return mixed
 */
function getArticle($table)
{
    $url = $_SERVER["REQUEST_URI"];
	$db = new myDatabase();
	$mysql = $db->database;
	$article = $mysql->query(
		"select * from $table where url=:url",[':url'=>$url]
	)->fetchAll()[0];
	if (count($article) == 0 ){
        $article = $mysql->query(
            "SELECT * FROM news_article
				WHERE id >= (SELECT FLOOR( RAND()*((SELECT MAX(id) FROM news_article)-(SELECT MIN(id) FROM news_article))+(SELECT MIN(id) FROM news_article)))
				ORDER BY id LIMIT :num;",[':num'=>1]
        )->fetchAll()[0];
    }
	$content = $article['content'];
	$content = str_replace('<img','<img rel=\'nofollow\'',$content);
	$article['content'] = $content;
	return $article;
}


/**
 * 获取随机3年内时间 Y-m-d
 * @return false|string
 */
function randTime(){
    $start_time = strtotime('2015-01-01');
    $end_time = strtotime('2017-01-01');
    return date('Y-m-d', mt_rand($start_time,$end_time));
}

/**
 * 获取随机栏目名
 * 可指定类型 bbs news ...
 * @param null $type
 * @param $num
 * @return mixed
 */
function TypeName($type=null, $num){
    $db = new myDatabase();
    $mysql = $db->database;
    $type = $mysql->query(
        "SELECT name FROM typename where type = :temp ORDER BY rand() LIMIT :num", [
            ":temp" => $type,
            ":num" => $num,
        ]
    )->fetchAll();
    return $type;
}

//print_r(TypeName('company', 10));

/**
 * 获取随机人名
 * @return mixed
 */
function randName(){
	$db = new myDatabase();
	$mysql = $db->database;
	$type = $mysql->query(
		"SELECT * FROM username  ORDER BY rand() LIMIT :num", [
			":num" => 1,
		]
	)->fetchAll();
	return $type[0]['name'];
}

/**
 * 获取随机评论
 * 可指定类别 bbs news...
 * @param $type
 * @return mixed
 */
function randComment($type){
	$db = new myDatabase();
	$mysql = $db->database;
	$article = $mysql->query(
		"SELECT content FROM comment WHERE type=:type and id >=(select floor(rand() * ((select max(id) from comment) - (select min(id) from comment)) + (select min(id) from comment))) order by id limit 1",
		[':type'=>$type]
	)->fetchAll()[0][0];
	return $article;
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
function randPic($type, $num=1){
    $db = new myDatabase();
    $mysql = $db->database;
    $data = $mysql->rand('pic','path',['type'=>$type,]);
    if ($num == 1 ){
        return $data[0];
    }
    else {
        return array_splice($data,0, $num);
    }
}

function randLevel(){
    $db = new myDatabase();
    $mysql = $db->database;
    $data = $mysql->rand('pic','path',['type'=>'level',]);
    return $data[0];
}

//print_r(randPic('news',10));

