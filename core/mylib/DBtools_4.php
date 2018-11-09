<?php
/**
 * Created by PhpStorm.
 * User: Nicholas
 * Date: 2018/11/6
 * Time: 4:05 PM
 */

require 'database.php';

function insertDB($name){
    $db = new myDatabase();
    $mysql = $db->database;
    $article = $mysql->insert('place', ['name' => $name]);
}

$file=fopen('diqu.txt',"r");
while(!feof($file))
{
    $name = fgets($file);
    insertDB($name);
    echo $name;
}
fclose($file);