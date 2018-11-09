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
        "SELECT id, description FROM article where type='blog'"
    )->fetchAll();
    return $article;
}

function updateALL($id, $description){
    $db = new myDatabase();
    $mysql = $db->database;
    $article = $mysql->query(
        "update article set description=:description where id=:id", [':description'=>$description, ':id'=>$id]
    );
}

$urls = getAll();
foreach ($urls as $x){
    $target = preg_replace('/[a-z,A-Z,0-9,<,>,=,\/,?,\:,",\.w]/','',$x[1]);
    echo $target;
    echo chr(10);
    updateALL($x[0],$target);
}