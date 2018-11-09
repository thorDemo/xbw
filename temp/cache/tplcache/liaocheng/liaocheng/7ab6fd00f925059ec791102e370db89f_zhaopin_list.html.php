<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php require 'core/mylib/tag.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php echo $this->_var['toptitle']; ?></title>
	<meta name="Description" content="<?php echo $this->_var['description']; ?>"/>
	<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>"/>
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/css.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/classad.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/job_index.css" type="text/css"/>
	<script src="/inc/system.js" type="text/javascript"></script>
</head>
<body>
<?php echo $this->fetch('header.html'); ?>
<ul class="job_ding">
	<?php $article = randMeta('zhaopin',['title','url'],20)?>
	<?php for ($i=1;$i<21;$i++):?>
	<li id="li<?=$i?>">
		<strong>顶</strong>
		<a href="<?=$article[$i-1]['url']?>" target="_blank"><?=$article[$i-1]['title']?></a>
	</li>
	<?php endfor;?>
</ul>
<div class="content">
	<div class="l">
		<div class="main_list h228">
			<h5><strong>企业招聘信息索引</strong></h5>
			<div class="main_zhaopin">
				<?php $type = typeName('zhaopin', 20)?>
				<?php foreach ($type as $item):?>
				<a href="<?=randList('zhaopin')?>"><?=$item['name']?><span class="js">(<?=rand(100,5000)?>)</span></a>
				<?php endforeach;?>
			</div>
			<div class="main_lx">
				<b>按地区：</b>
				<?php $place = randPlace(5)?>
				<?php foreach ($place as $item):?>
				<a href="<?=randList('zhaopin')?>"><?=$item?></a>
				<?php endforeach;?>
			</div>
			<div class="main_lx">
				<b>按类型：</b>
				<a href="<?=randList('zhaopin')?>">全职</a>
				<a href="<?=randList('zhaopin')?>">兼职</a>
				<a href="<?=randList('zhaopin')?>">全/兼皆可</a>
				<a href="<?=randList('zhaopin')?>">实习</a></div>

		</div>
	</div>
	<div class="r">
		<div class="abc k208">
			<h5><a href="<?=randList('zhaopin')?>">更多 &raquo;</a>最新个人求职信息</h5>
			<ul class="abc_news">
				<?php $article = randArticle('zhaopin',10)?>
				<?php foreach ($article as $item):?>
				<li><a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a></li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>
</div>
<div class="zhaopin_news">
	<h5><a href="<?=randList('zhaopin')?>">免费发布招聘/求职信息 &raquo;</a><strong>最新聊城招聘信息</strong></h5>
	<ul>
        <?php $article = randArticle('zhaopin',3)?>
        <?php foreach ($article as $item):?>
		<li class="ding"><strong>顶</strong><a href="<?=$item['url']?>" class="Gray" target="_blank"><?=$item['title']?></a></li>
		<?php endforeach;?>
        <?php $article = randArticle('zhaopin',114)?>
        <?php foreach ($article as $item):?>
		<li><a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a></li>
        <?php endforeach;?>
	</ul>
</div>
<div class="content tC top_5">
	<script src="/inc/gg728x90.js"></script>
</div>
<div id="bottom"><a href="/webad/sitemap.htm">网站地图</a> - <a href="/webad/wap.htm">手机版</a> - <a href="/zhidao">用户帮助</a> -
	<a href="/huiyuan/reg.aspx">用户注册</a> - <a href="/inc/tougao.aspx">在线投稿</a> - <a href="/webad/adServer.htm">广告投放</a>
	- <a href="/inc/guestbook.aspx">留言反馈</a><br/>Copyright &copy;&nbsp; liaocheng.cc Inc. All rights reserved
</div>
</body>
</html>