<?php
/**
 * Created by PhpStorm.
 * User: Nicholas
 * Date: 2018/11/5
 * Time: 2:24 PM
 */

$num = 100;
$a = mt_rand(1,98);
$b = mt_rand(1, $num-$a-1);
$c = $num-$a-$b;
echo $a.' '.$b.' '.$c;