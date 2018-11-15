<?php
	/**
	 * Created by PhpStorm.
	 * User: Nicholas
	 * Date: 2018/11/15
	 * Time: 17:16
	 */
	
	require 'remoteDatabase.php';
	
	function getAll(){
		$db = new myDatabase();
		$mysql = $db->database;
		$article = $mysql->select('article',['id','title','description', 'content'],['type'=>'blog']);
		return $article;
	}
	
	function updateArticle($article){
		$db = new myDatabase();
		$mysql = $db->database;
		$article = $mysql->update('article',['description'=>$article['description'],'content'=>$article['content']],['id'=>$article['id']]);
		return $article;
	}
	
	function parseArticle($article){
		$article['description'] = preg_replace("/[a-z,A-Z,0-9,<,>,=,\/,?,\:,\",\.]/","",$article['description']);
		$article['content'] = preg_replace('(\</p\>)', '', $article['content']);
		$article['content'] = preg_replace('(\<p\>)', '', $article['content']);
		$article['content'] = preg_replace('(\<img)', '<img rel="nofollow" alt="'.$article['title'].'" ', $article['content']);
		return $article;
	}
	
	$allArticle = getAll();
	foreach ($allArticle as $article){
		$article = parseArticle($article);
		print_r($article);
		updateArticle($article);
	}
	
	
	