<?php
/**
 * Created by PhpStorm.
 * User: Nicholas
 * Date: 2018/10/26
 * Time: 上午1:24
 */
require 'database.php';

function getAll(){
    $db = new myDatabase();
    $mysql = $db->database;
    $article = $mysql->query(
        "SELECT id, url FROM blog_article"
    )->fetchAll();
    return $article;
}

function updateALL($id, $url){
    $db = new myDatabase();
    $mysql = $db->database;
    $article = $mysql->query(
        "update blog_article set url=:url where id=:id", [':url'=>$url, ':id'=>$id]
    );
}

$urls = getAll();
foreach ($urls as $x){
    $target = str_ireplace('bbs','blog', $x[1]);
    echo $x[0].' '.$target,chr(10);
    updateALL($x[0],$target);
}

