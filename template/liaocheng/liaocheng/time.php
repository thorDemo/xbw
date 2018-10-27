<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/23
 * Time: 19:16
 */

    function rand_time(){
        $start_time = strtotime('2015-01-01');
        $end_time = strtotime('2017-01-01');
        echo date('Y-m-d', mt_rand($start_time,$end_time));
    }

?>