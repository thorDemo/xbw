<?php
/**
 * Created by PhpStorm.
 * User: Nicholas
 * Date: 2018/10/26
 * Time: 上午11:20
 */
require 'database.php';

function insertPic($path, $type){
    $db = new myDatabase();
    $mysql = $db->database;
    $last_user_id = $mysql ->insert("pic", [
        "path" => $path,
        "type" => $type,
    ]);
    print_r($last_user_id);
}

/**
 * 获取 指定文件夹下的图片
 * dirName 为 /xbw/template/后面的路径
 * 数量选填 默认为1
 * @param $dirName
 * @return array|string
 */
function getPic($dirName='liaocheng/liaocheng/face'){
    $vendorDir = dirname(dirname(__FILE__));
    $baseDir = dirname($vendorDir);
    $target = array();
    $targetName = $baseDir.'/template/'.$dirName;
    $handler = opendir($targetName);
    $temp = 0;
    while( ($filename = readdir($handler)) !== false ) {
        if($filename != "." && $filename != ".."){
            $target[$temp] = $filename;
        }
        $temp ++;
    }
    foreach ($target as $it){
        $target =  '/template/'.$dirName.'/'.$it;
        echo $target;
        echo chr(10);
        insertPic($target,'face');
    }
    return '';
}


getPic();

function scanPic(){

}
