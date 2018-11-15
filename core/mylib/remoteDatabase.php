<?php
/**
 * Created by PhpStorm.
 * User: Nicholas
 * Date: 2018/10/23
 * Time: 下午9:59
 */

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);
require $baseDir.'/vendor/autoload.php';

use Medoo\Medoo;


/**
 * 数据库类
 * @Author Nicholas
 * Class myDatabase
 */
class myDatabase {
    var $database;

    function __construct() {
        $this->database = new Medoo([
            // required
            'database_type' => 'mysql',
            'database_name' => 'xbw',
            'server' => '23.110.211.170',
            'username' => 'root',
            'password' => '123456',

            // [optional]
            'charset' => 'utf8',
            'port' => 3306,

            // [optional] Table prefix
//            'prefix' => 'PREFIX_',

            // [optional] Enable logging (Logging is disabled by default for better performance)
            'logging' => true,

            // [optional] MySQL socket (shouldn't be used with server and port)
            'socket' => '/tmp/mysql.sock',

            // [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
            'option' => [
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            ],

            // [optional] Medoo will execute those commands after connected to the database for initialization
            'command' => [
                'SET SQL_MODE=ANSI_QUOTES'
            ]
        ]);;
    }

}



