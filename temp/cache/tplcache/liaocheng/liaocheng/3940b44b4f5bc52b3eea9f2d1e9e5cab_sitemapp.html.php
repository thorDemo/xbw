<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php include 'core/mylib/tag.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>百度sitemap.html</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<style type="text/css">
		body {font-family: Verdana;FONT-SIZE: 12px;MARGIN: 0;color: #000000;background: #ffffff;}
		img {border:0;}
		li {margin-top: 8px;}
		.page {padding: 4px; border-top: 1px #EEEEEE solid}
		.author {background-color:#EEEEFF; padding: 6px; border-top: 1px #ddddee solid}
		#nav, #content, #footer {padding: 8px; border: 1px solid #EEEEEE; clear: both; width: 95%; margin: auto; margin-top: 10px;}
	</style>
</head>
<body vlink="#333333" link="#333333">
<h2 style="text-align: center; margin-top: 20px">美联软通's SiteMap </h2>
<div id="nav"><a href="/"><strong>美联软通</strong></a>  &raquo; <a href="/sitemap.html">站点地图</a></div>
<div id="content">
	<h3>最新文章</h3>
	<ul>
		<table width='100%' border='0' cellspacing='0' cellpadding='0'>
			<tbody>
                <?php $article = lastArticle('news')?>
                <?php for($i=3;$i<100;$i++):?>
                    <?php if ($i % 3 == 0):?>
	                <tr>
	                    <td width='25%'><li><a href="<?=$article[$i]['url']?>"><?=$article[$i]['title']?></a></li></td>
	                    <td width='25%'><li><a href="<?=$article[$i-1]['url']?>"><?=$article[$i-1]['title']?></a></li></td>
	                    <td width='25%'><li><a href="<?=$article[$i-2]['url']?>"><?=$article[$i-2]['title']?></a></li></td>
	                    <td width='25%'><li><a href="<?=$article[$i-3]['url']?>"><?=$article[$i-3]['title']?></a></li></td>
		            </tr>
					<?php endif;?>
                <?php endfor;?>
			</tbody>
			<tbody>
            <?php $article = lastArticle('zhaopin')?>
            <?php for($i=3;$i<100;$i++):?>
                <?php if ($i % 3 == 0):?>
					<tr>
						<td width='25%'><li><a href="<?=$article[$i]['url']?>"><?=$article[$i]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-1]['url']?>"><?=$article[$i-1]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-2]['url']?>"><?=$article[$i-2]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-3]['url']?>"><?=$article[$i-3]['title']?></a></li></td>
					</tr>
                <?php endif;?>
            <?php endfor;?>
			</tbody>
			<tbody>
            <?php $article = lastArticle('fangchan')?>
            <?php for($i=3;$i<100;$i++):?>
                <?php if ($i % 3 == 0):?>
					<tr>
						<td width='25%'><li><a href="<?=$article[$i]['url']?>"><?=$article[$i]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-1]['url']?>"><?=$article[$i-1]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-2]['url']?>"><?=$article[$i-2]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-3]['url']?>"><?=$article[$i-3]['title']?></a></li></td>
					</tr>
                <?php endif;?>
            <?php endfor;?>
			</tbody>
			<tbody>
            <?php $article = lastArticle('ershou')?>
            <?php for($i=3;$i<100;$i++):?>
                <?php if ($i % 3 == 0):?>
					<tr>
						<td width='25%'><li><a href="<?=$article[$i]['url']?>"><?=$article[$i]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-1]['url']?>"><?=$article[$i-1]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-2]['url']?>"><?=$article[$i-2]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-3]['url']?>"><?=$article[$i-3]['title']?></a></li></td>
					</tr>
                <?php endif;?>
            <?php endfor;?>
			</tbody>
			<tbody>
            <?php $article = lastArticle('jiaoyou')?>
            <?php for($i=3;$i<100;$i++):?>
                <?php if ($i % 3 == 0):?>
					<tr>
						<td width='25%'><li><a href="<?=$article[$i]['url']?>"><?=$article[$i]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-1]['url']?>"><?=$article[$i-1]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-2]['url']?>"><?=$article[$i-2]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-3]['url']?>"><?=$article[$i-3]['title']?></a></li></td>
					</tr>
                <?php endif;?>
            <?php endfor;?>
			</tbody>
			<tbody>
            <?php $article = lastArticle('shenghuo')?>
            <?php for($i=3;$i<100;$i++):?>
                <?php if ($i % 3 == 0):?>
					<tr>
						<td width='25%'><li><a href="<?=$article[$i]['url']?>"><?=$article[$i]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-1]['url']?>"><?=$article[$i-1]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-2]['url']?>"><?=$article[$i-2]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-3]['url']?>"><?=$article[$i-3]['title']?></a></li></td>
					</tr>
                <?php endif;?>
            <?php endfor;?>
			</tbody>
			<tbody>
			</tbody>
			<tbody>
            <?php $article = lastArticle('blog')?>
            <?php for($i=3;$i<100;$i++):?>
                <?php if ($i % 3 == 0):?>
					<tr>
						<td width='25%'><li><a href="<?=$article[$i]['url']?>"><?=$article[$i]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-1]['url']?>"><?=$article[$i-1]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-2]['url']?>"><?=$article[$i-2]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-3]['url']?>"><?=$article[$i-3]['title']?></a></li></td>
					</tr>
                <?php endif;?>
            <?php endfor;?>
			</tbody>
			<tbody>
            <?php $article = lastArticle('qiye')?>
            <?php for($i=3;$i<100;$i++):?>
                <?php if ($i % 3 == 0):?>
					<tr>
						<td width='25%'><li><a href="<?=$article[$i]['url']?>"><?=$article[$i]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-1]['url']?>"><?=$article[$i-1]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-2]['url']?>"><?=$article[$i-2]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-3]['url']?>"><?=$article[$i-3]['title']?></a></li></td>
					</tr>
                <?php endif;?>
            <?php endfor;?>
			</tbody>
			<tbody>
            <?php $article = lastArticle('keji')?>
            <?php for($i=3;$i<100;$i++):?>
                <?php if ($i % 3 == 0):?>
					<tr>
						<td width='25%'><li><a href="<?=$article[$i]['url']?>"><?=$article[$i]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-1]['url']?>"><?=$article[$i-1]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-2]['url']?>"><?=$article[$i-2]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-3]['url']?>"><?=$article[$i-3]['title']?></a></li></td>
					</tr>
                <?php endif;?>
            <?php endfor;?>
			</tbody>
			<tbody>
            <?php $article = lastArticle('bbs')?>
            <?php for($i=3;$i<100;$i++):?>
                <?php if ($i % 3 == 0):?>
					<tr>
						<td width='25%'><li><a href="<?=$article[$i]['url']?>"><?=$article[$i]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-1]['url']?>"><?=$article[$i-1]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-2]['url']?>"><?=$article[$i-2]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-3]['url']?>"><?=$article[$i-3]['title']?></a></li></td>
					</tr>
                <?php endif;?>
            <?php endfor;?>
			</tbody>
			<tbody>
            <?php $article = lastArticle('lvyou')?>
            <?php for($i=3;$i<100;$i++):?>
                <?php if ($i % 3 == 0):?>
					<tr>
						<td width='25%'><li><a href="<?=$article[$i]['url']?>"><?=$article[$i]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-1]['url']?>"><?=$article[$i-1]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-2]['url']?>"><?=$article[$i-2]['title']?></a></li></td>
						<td width='25%'><li><a href="<?=$article[$i-3]['url']?>"><?=$article[$i-3]['title']?></a></li></td>
					</tr>
                <?php endif;?>
            <?php endfor;?>
			</tbody>
		</table>

	</ul>
</div>

<div id="footer">查看网站首页: <strong><a href="/"><strong>美联软通</strong></a></strong></div><br />
<center>

</center>
</body>
</html>
