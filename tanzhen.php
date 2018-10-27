<?php
if(@$_GET['a']=='phpinfo'){
	phpinfo();
	exit();
}

//iis7 REQUEST_URI
if(isset($_SERVER['HTTP_X_ORIGINAL_URL'])){
	$_SERVER['REQUEST_URI'] = $_SERVER['HTTP_X_ORIGINAL_URL'];
}
//iis6 REQUEST_URI
if(isset($_SERVER['HTTP_X_REWRITE_URL'])) {
	$_SERVER['REQUEST_URI'] = $_SERVER['HTTP_X_REWRITE_URL'];
}
function checkServerVar()
{
    $vars = array('HTTP_HOST', 'SERVER_NAME', 'SERVER_PORT', 'SCRIPT_NAME', 'SCRIPT_FILENAME', 'PHP_SELF', 'HTTP_ACCEPT', 'HTTP_USER_AGENT');
    $missing = array();
    foreach ($vars as $var){
        if (!isset($_SERVER[$var]))
            $missing[] = $var;
    }
    if (!empty($missing))
        return '$_SERVER缺少' . implode(', ', $missing) . '。';

//    if (realpath($_SERVER["SCRIPT_FILENAME"]) !== realpath(__FILE__))
//        return '$_SERVER["SCRIPT_FILENAME"]必须与入口文件路径一致。';

    if (!isset($_SERVER["REQUEST_URI"]))
        return '$_SERVER["REQUEST_URI"]必须存在。';
    return '';
}
$php_os = explode(" ", php_uname());
@ini_set('memory_limit','64M');
@ini_set('memory_limit','128M');
$able=array_flip(get_loaded_extensions());

$requirements = array(
    array(
        'PHP 版本',
        true,
        version_compare(PHP_VERSION, "5.2.0", ">=") && version_compare(PHP_VERSION, "7.7.0", "<") ,
        'PHP 5.2 ~ 7',
        PHP_VERSION,
    ),
	array(
		'zlib扩展',
		false,
		extension_loaded("zlib"),
		'开启页面可压缩加速',
		'尚未开启'
	),
	array(
        'safe_mode安全模式',
        true,
        !ini_get('safe_mode'),
        '不能在安全模式下运行',
        '开启了'
    ),
	array(
        'iconv编码转换',
        true,
        function_exists('iconv'),
        '必须开启，否则乱码',
        '尚未开启'
    ),
	array(
        'mbstring扩展',
        true,
        function_exists('mb_strlen'),
        '字符串处理函数',
        '尚未开启'
    ),
	array(
        'memory_limit',
        true,
        (intval(@ini_get('memory_limit'))>=128),
        '>=128M',
        '不符合条件'
    ),
    array(
        '$_SERVER变量',
        true,
        ($message = checkServerVar()) === '',
        $message,
		$message,
    ),
    array(
        '开启allow_url_fopen',
        true,
        ini_get("allow_url_fopen") == 1,
        '文件读取',
		'尚未开启'
    ),
    array(
        'curl_int',
        false,
        function_exists('curl_init'),
        '推荐采集函数',
		'尚未开启',
    ),
);
$result = 1;

foreach ($requirements as $i => $requirement)
{
    if ($requirement[1] && !$requirement[2])
        $result = 0;
    else if ($result > 0 && !$requirement[1] && !$requirement[2])
        $result = -1;
    if ($requirement[3] === '')
        $requirements[$i][3] = '&nbsp;';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>小霸王seo服务器环境探测</title>
    </head>
    <body>
<style type="text/css">
*{font-size:12px;font-family:Arial,微软雅黑,宋体;}
.buy_box{background:#ccc;width:100%;float:left}
.buy_box th{background:#222;color:#ffffff;font:14px Arial,微软雅黑,宋体;padding:8px;text-align:center;}
.buy_box .text{text-align:center;}
.buy_box .text td{padding:6px 0;background:#f9f9f9;}
.buy_box .text td.name{background:#F3F7FA;}
.text p.tips{padding:3px 0;}
a{text-decoration:none;color:red}
a:hover{text-decoration:underline;color:red}
.good{color:green;font-weight:700}
.bad{color:red;font-weight:700}
#checkcaiji b{color:red}
</style>
        <div style="width: 682px; margin: 10px auto">
			<p align="center" style="font:25px Arial,微软雅黑,宋体;">小霸王seo服务器环境探测</p>
			<hr color="#ccc" size=1>
            <h4>检查结果</h4>
            <p>您的PHP版本是：<?php echo PHP_VERSION;?></p>
            <p>
                <?php if ($result > 0): ?>
                    <span style="font-size:18px;color:green;font-weight:700">恭喜！您的服务器配置已符合要求！</span>
                <?php elseif ($result < 0): ?>
                    <span style="font-size:18px;color:#3366cc;font-weight:700">您的服务器配置符合最低要求。如果您需要使用特定的功能，请关注如下警告</span>
                <?php else: ?>
                    <span style="font-size:18px;color:#cc0000;font-weight:700">您的服务器配置未能满足要求。</span>
                <?php endif; ?>
            </p>
            <br />
            <h4>具体检查结果</h4>
            <table border="0" align="center" cellpadding="0" cellspacing="1" class="buy_box">
                <tr>
					<th> 函数/模块</th>
					<th width="160"> 检测结果</th>
					<th width="160"> 要求说明</th>
				</tr>
                <?php foreach ($requirements as $requirement): ?>
				<tr class="text">
					<td><?php echo $requirement[0]; ?></td>
					<td><?php echo $requirement[2] ? (($requirement[2]!==true && $requirement[2]!='')?$requirement[2]: '<span class="good">通过</span>') : '<span class="bad">未通过</span> '; ?></td>
					<td><?php
                            $errorInfo = '';
                            if (!$requirement[2] && isset($requirement[4]))
                                $errorInfo = '当前结果：' . $requirement[4] . '&nbsp;';
                            ?><?php echo $requirement[2] ? $requirement[3] : $errorInfo . '<a href="http://www.xbwseo.com/" target="_blank">解决方法</a>'; ?></td>
				</tr>
                <?php endforeach; ?>
				
            </table>
			<table border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:50px">
				<tr>
					 <td><?php echo $_SERVER['SERVER_SOFTWARE'];?>, 操作系统： <?php echo $php_os[0].'&nbsp;内核版本：'.(('/'==DIRECTORY_SEPARATOR)?$php_os[2]:$php_os[1]);?></td>
				</tr>
			</table>
        </div>
    </body>
</html>